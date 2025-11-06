$(document).ready(function () {
	// --- SETUP ---
	let cartCount = 0;

	function updateCartBadge() {
		const badge = $('#cart-badge');
		if (cartCount > 0) {
			badge.text(cartCount).removeClass('d-none');
		} else {
			badge.addClass('d-none');
		}
	}

	function showToast(message, status = 'success') {
		const toastTemplate = $('#toast-template');
		if (toastTemplate.length === 0) return;
		const newToast = toastTemplate.clone().removeAttr('id');
		
		const toastTitle = newToast.find('.toast-title');
		const toastBody = newToast.find('.toast-body');
		const toastIcon = newToast.find('.bi');

		newToast.removeClass('d-none');

		const bgClass = status === 'success' ? 'bg-success' : 'bg-danger';
		const titleText = status === 'success' ? 'Success' : 'Error';
		const iconClass = status === 'success' ? 'bi-check-circle-fill' : 'bi-exclamation-triangle-fill';

		newToast.addClass(bgClass + ' text-white');
		toastTitle.text(titleText);
		toastIcon.addClass(iconClass);
		toastBody.text(message);
		
		$('.toast-container').append(newToast);

		const toast = new bootstrap.Toast(newToast);
		toast.show();

		newToast.on('hidden.bs.toast', function () {
			$(this).remove();
		});
	}

	$.validator.addMethod("nospaces", function (value, element) {
		return this.optional(element) || value.trim() !== '';
	}, "This field cannot contain only spaces.");

	$.validator.addMethod("ph_mobile", function (value, element) {
		return this.optional(element) || /^(9)\d{9}$/.test(value);
	}, "Please enter a valid 10-digit mobile number (e.g., 9171234567).");

	$('#modal-placeholder').load('partials/auth-modal.php');

	// --- EVENT LISTENERS ---
	$('body').on('show.bs.modal', '#loginModal', function () {
		$('body').addClass('modal-blur-active');
		$(this).find('input[type="password"]').trigger('input');
	});

	$('body').on('hidden.bs.modal', '#loginModal', function () {
		$('body').removeClass('modal-blur-active');
	});

	// --- PRODUCT CARD INTERACTIVITY ---
	$(document).on('click', '.product-grid .buy', function() {
		const wrapper = $(this).closest('.wrapper');
		const bottom = wrapper.find('.bottom');
		
		if (!bottom.hasClass('clicked')) {
			bottom.addClass("clicked");
			cartCount++;
			updateCartBadge();
		}
	});

	$(document).on('click', '.product-grid .remove', function() {
		const wrapper = $(this).closest('.wrapper');
		const bottom = wrapper.find('.bottom');

		if (bottom.hasClass('clicked')) {
			bottom.removeClass("clicked");
			if (cartCount > 0) {
				cartCount--;
			}
			updateCartBadge();
		}
	});

	// --- PRODUCT CARD INTERACTIVITY (MOBILE) ---
	$(document).on('click', '.product-grid .inside', function(event) {
		if ($(window).width() < 992) {
			event.preventDefault();
			const clickedInside = $(this);
			
			$('.product-grid .inside').not(clickedInside).removeClass('reveal');
			
			clickedInside.toggleClass('reveal');
		}
	});

	// --- FORM VALIDATION ---
	if ($('#newsletterForm').length > 0) {
		$('#newsletterForm').validate({
			rules: {
				newsletter_email: {
					required: true,
					email: true
				}
			},
			messages: {
				newsletter_email: {
					required: "This field is required.",
					email: "Please enter a valid email address."
				}
			},
			errorPlacement: function (error, element) {
				if (element.parent().hasClass('input-group')) {
					error.insertAfter(element.parent());
				} else {
					error.insertAfter(element);
				}
			},
			submitHandler: function (form) {
				showToast('Thank you for subscribing!', 'success');
				form.reset();
			}
		});
	}

	if ($('#contactForm').length > 0) {
		$('#contactForm').validate({
			rules: {
				contactName: {
					required: true,
					nospaces: true
				},
				contactEmail: {
					required: true,
					email: true
				},
				contactMessage: {
					required: true,
					nospaces: true
				}
			},
			messages: {
				contactName: {
					required: "This field is required."
				},
				contactEmail: {
					required: "This field is required.",
					email: "Please include an '@' and a valid domain (e.g., .com)."
				},
				contactMessage: {
					required: "This field is required."
				}
			}
		});
	}

	$(document).on('submit', '#loginForm', function (event) {
		event.preventDefault();
		const form = $(this);
		if (!form.data('validator')) {
			const validator = form.validate({
				rules: {
					loginEmail: {
						required: true,
						email: true
					},
					loginPassword: {
						required: true
					}
				},
				messages: {
					loginEmail: {
						required: "This field is required."
					},
					loginPassword: {
						required: "This field is required."
					}
				},
				errorPlacement: function (error, element) {
					if (element.closest('.password-wrapper').length) {
						error.insertAfter(element.closest('.password-wrapper'));
					} else {
						error.insertAfter(element);
					}
				},
				submitHandler: function (form) {
					const formData = $(form).serialize() + '&action=login';
					$.ajax({
						type: 'POST',
						url: 'auth_handler.php',
						data: formData,
						dataType: 'json'
					}).done(function (response) {
						if (response.status === 'success') {
							$('#loginModal').modal('hide');
							showToast(response.message, 'success');
							setTimeout(function() {
								window.location.reload();
							}, 1500);
						} else {
							validator.showErrors({
								loginEmail: response.message
							});
						}
					}).fail(function () {
						showToast('An unknown server error occurred.', 'error');
					});
				}
			});
			form.trigger('submit');
		}
	});

	$(document).on('submit', '#signupForm', function (event) {
		event.preventDefault();
		const form = $(this);
		if (!form.data('validator')) {
			const validator = form.validate({
				rules: {
					signupName: {
						required: true,
						nospaces: true
					},
					signupContact: {
						required: true,
						ph_mobile: true,
						remote: {
							url: "check_handler.php",
							type: "get"
						}
					},
					signupEmail: {
						required: true,
						email: true,
						remote: {
							url: "check_handler.php",
							type: "get"
						}
					},
					signupPassword: {
						required: true,
						minlength: 8
					},
					confirmPassword: {
						required: true,
						equalTo: "#signupPassword"
					}
				},
				messages: {
					signupContact: {
						remote: "This contact number is already registered."
					},
					signupEmail: {
						remote: "This email address is already in use."
					},
					confirmPassword: {
						equalTo: "This password does not match."
					}
				},
				errorPlacement: function (error, element) {
					if (element.closest('.password-wrapper').length || element.closest('.input-group').length) {
						error.insertAfter(element.closest('.password-wrapper, .input-group'));
					} else {
						error.insertAfter(element);
					}
				},
				submitHandler: function (form) {
					const formData = $(form).serialize() + '&action=signup';
					$.ajax({
						type: 'POST',
						url: 'auth_handler.php',
						data: formData,
						dataType: 'json'
					}).done(function (response) {
						if (response.status === 'success') {
							showToast(response.message, 'success');
							setTimeout(function() {
								$('#show-login-view').trigger('click');
								form.reset();
							}, 500);
						} else {
							if (response.error_field) {
								validator.showErrors({
									[response.error_field]: response.message
								});
							} else {
								showToast(response.message, 'error');
							}
						}
					}).fail(function () {
						showToast('An unknown server error occurred.', 'error');
					});
				}
			});
			form.trigger('submit');
		}
	});

	// --- MODAL VIEW TOGGLING ---
	$(document).on('click', '#show-signup-view', function (event) {
		event.preventDefault();
		$('#auth-message').empty();
		$('#login-view, #login-footer').addClass('d-none');
		$('#signup-view, #signup-footer').removeClass('d-none');
		$('#loginModalLabel').text('Create an Account');
	});

	$(document).on('click', '#show-login-view', function (event) {
		event.preventDefault();
		$('#auth-message').empty();
		$('#signup-view, #signup-footer').addClass('d-none');
		$('#login-view, #login-footer').removeClass('d-none');
		$('#loginModalLabel').text('Member Login');
	});

	$(document).on('show.bs.modal', '#loginModal', function () {
		$('#auth-message').empty();
		$('#signup-view, #signup-footer').addClass('d-none');
		$('#login-view, #login-footer').removeClass('d-none');
		$('#loginModalLabel').text('Member Login');
	});

	// --- INPUT FILTERING / KEYPRESS RESTRICTIONS ---
	$(document).on('input', '.password-wrapper input', function() {
		const wrapper = $(this).closest('.password-wrapper');
		const iconSpan = wrapper.find('.toggle-password');
		if ($(this).val().length > 0) {
			iconSpan.show();
		} else {
			iconSpan.hide();
		}
	});
	
	$(document).on('click', '.toggle-password', function () {
		const icon = $(this).find('i');
		const input = $(this).closest('.password-wrapper').find('input');
		if (input.attr('type') === 'password') {
			input.attr('type', 'text');
			icon.removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
		} else {
			input.attr('type', 'password');
			icon.removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
		}
	});

	$(document).on('keypress', '.no-leading-space', function (event) {
		if (event.which === 32 && $(this).val().length === 0) {
			event.preventDefault();
		}
	});

	$(document).on('input', '.normalize-spaces', function () {
		$(this).val(function (i, value) {
			return value.replace(/\s\s+/g, ' ');
		});
	});

	$(document).on('keypress', 'input[type="email"]', function (event) {
		if (event.which === 32) {
			event.preventDefault();
		}
	}).on('blur', 'input[type="email"]', function () {
		$(this).val(function (i, value) {
			return value.replace(/\s/g, '');
		});
	});

	$(document).on('keypress', '#signupName', function (event) {
		const regex = /^[a-zA-Z\s'-]+$/;
		if (event.key && !regex.test(event.key)) {
			event.preventDefault();
		}
	});

	$(document).on('keydown', '#signupContact', function (event) {
		const isDigit = /^[0-9]$/.test(event.key);
		const isControlKey = [
			'Backspace', 'Delete', 'Tab', 'Enter', 
			'ArrowLeft', 'ArrowRight', 'Home', 'End'
		].includes(event.key);
		const isShortcut = (event.ctrlKey || event.metaKey) && ['a', 'c', 'v', 'x'].includes(event.key.toLowerCase());

		if (isDigit || isControlKey || isShortcut) {
			return;
		}
		
		event.preventDefault();
	});

	$(document).on('input', '#signupContact', function () {
		this.value = this.value.replace(/\D/g, '');
	});
});