$(document).ready(function () {
	$.validator.addMethod("nospaces", function (value, element) {
		return this.optional(element) || value.trim() !== '';
	}, "This field cannot contain only spaces.");

	$('#modal-placeholder').load('partials/login-modal.html');

	$('body').on('show.bs.modal', function () {
		$('body').addClass('modal-blur-active');
	});

	$('body').on('hidden.bs.modal', function () {
		$('body').removeClass('modal-blur-active');
	});

	$(document).on('click', '#goToSignup', function (event) {
		event.preventDefault();
		const signupUrl = $(this).attr('href');
		const modal = $('#loginModal');
		if (modal.is(':visible')) {
			modal.on('hidden.bs.modal', function () {
				window.location.href = signupUrl;
				$(this).off('hidden.bs.modal');
			}).modal('hide');
		} else {
			window.location.href = signupUrl;
		}
	});

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

	if ($('#signupForm').length > 0) {
		$('#signupForm').validate({
			rules: {
				signupName: {
					required: true,
					nospaces: true
				},
				signupUsername: {
					required: true,
					nospaces: true
				},
				signupEmail: {
					required: true,
					email: true
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
				confirmPassword: {
					equalTo: "This password does not match."
				}
			}
		});
	}

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
			}
		});
	}

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

	$('#signupName').on('keypress', function (event) {
		const regex = /^[a-zA-Z\s'-]+$/;
		if (event.key && !regex.test(event.key)) {
			event.preventDefault();
		}
	});

	$('#signupUsername').on('keypress', function (event) {
		const regex = /^[a-zA-Z0-9_.-]+$/;
		if (event.key && !regex.test(event.key)) {
			event.preventDefault();
		}
	});

	$(document).on('submit', '#loginForm', function (event) {
		event.preventDefault();
		$(this).validate({
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
			submitHandler: function (form) {
				alert('Login successful!');
				$('#loginModal').modal('hide');
			}
		});
		$(this).trigger('submit');
	});
});