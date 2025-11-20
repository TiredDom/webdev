$(document).ready(function() {
    $(window).on('scroll', function() {
        var hero = $('.hero-section');
        var trigger = 50;

        if (hero.length) {
            trigger = hero.outerHeight() - $('.navbar').outerHeight();
        }

        if ($(this).scrollTop() > trigger) {
            $('.navbar').addClass('scrolled');
        } else {
            $('.navbar').removeClass('scrolled');
        }
    });

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

        newToast.on('hidden.bs.toast', function() {
            $(this).remove();
        });
    }

    $('.login-trigger').on('click', function(e) {
        e.preventDefault();
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    });

    $('#show-signup-view').on('click', function(e) {
        e.preventDefault();
        $('#login-view').addClass('d-none');
        $('#signup-view').removeClass('d-none');
        $('#loginModalLabel').text('Create Account');
    });

    $('#show-login-view').on('click', function(e) {
        e.preventDefault();
        $('#signup-view').addClass('d-none');
        $('#login-view').removeClass('d-none');
        $('#loginModalLabel').text('Welcome Back');
    });

    $('#loginModal').on('hidden.bs.modal', function() {
        $('#signup-view').addClass('d-none');
        $('#login-view').removeClass('d-none');
        $('#loginModalLabel').text('Welcome Back');
        
        if ($('#loginForm').length) {
            $('#loginForm').validate().resetForm();
            $('#loginForm')[0].reset();
        }
        if ($('#signupForm').length) {
            $('#signupForm').validate().resetForm();
            $('#signupForm')[0].reset();
        }
        $('.form-control').removeClass('error is-invalid');
        
        $('.password-wrapper .toggle-password').hide();
        $('.password-wrapper .toggle-password i').removeClass('bi-eye-slash').addClass('bi-eye');
        $('.password-wrapper input').attr('type', 'password');
    });

    $.validator.addMethod("nospaces", function(value, element) {
        return this.optional(element) || value.trim() !== '';
    }, "This field cannot contain only spaces.");

    $.validator.addMethod("lettersOnly", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s'-]+$/.test(value);
    }, "Name must contain only letters, spaces, hyphens, or apostrophes.");

    $.validator.addMethod("strictEmail", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value);
    }, "Please enter a valid email address (e.g., user@example.com).");

    if ($('#newsletterForm').length > 0) {
        $('#newsletterForm').validate({
            errorClass: 'text-danger small',
            rules: {
                newsletter_email: {
                    required: true,
                    strictEmail: true
                }
            },
            messages: {
                newsletter_email: {
                    required: "This field is required."
                }
            },
            errorPlacement: function(error, element) {
                if (element.parent().hasClass('input-group') || element.parent().hasClass('d-flex')) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function(form) {
                showToast('Thank you for subscribing!', 'success');
                form.reset();
            }
        });
    }

    if ($('#contactForm').length > 0) {
        $('#contactForm').validate({
            errorClass: 'text-danger small',
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    nospaces: true,
                    lettersOnly: true
                },
                email: {
                    required: true,
                    strictEmail: true
                },
                message: {
                    required: true,
                    minlength: 10,
                    nospaces: true
                }
            },
            messages: {
                name: {
                    required: "This field is required.",
                    minlength: "Name must be at least 2 characters long.",
                    lettersOnly: "Name cannot contain numbers or special characters."
                },
                email: {
                    required: "This field is required."
                },
                message: {
                    required: "This field is required.",
                    minlength: "Message must be at least 10 characters long."
                }
            },
            submitHandler: function(form) {
                showToast('Message sent successfully!', 'success');
                form.reset();
            }
        });
    }

    $('#loginForm').validate({
        errorClass: 'text-danger small',
        rules: {
            loginEmail: {
                required: true,
                strictEmail: true
            },
            loginPassword: {
                required: true
            }
        },
        messages: {
            loginEmail: {
                required: "Email is required."
            },
            loginPassword: {
                required: "Password is required."
            }
        },
        errorPlacement: function(error, element) {
            if (element.closest('.password-wrapper').length) {
                error.insertAfter(element.closest('.password-wrapper'));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            const formData = $(form).serialize() + '&action=login';
            $.ajax({
                type: 'POST',
                url: 'auth_handler.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showToast(response.message, 'success');
                        setTimeout(function() {
                            window.location.href = response.redirect;
                        }, 1000);
                    } else {
                        $(form).validate().showErrors({
                            "loginPassword": response.message
                        });
                    }
                },
                error: function() {
                    showToast('An error occurred. Please try again.', 'error');
                }
            });
        }
    });

    $('#signupForm').validate({
        errorClass: 'text-danger small',
        onkeyup: function(element) {
            $(element).valid();
        },
        rules: {
            signupName: {
                required: true,
                minlength: 2,
                lettersOnly: true,
                nospaces: true
            },
            signupEmail: {
                required: true,
                strictEmail: true
            },
            signupPassword: {
                required: true,
                minlength: 8
            },
            signupConfirmPassword: {
                required: true,
                equalTo: "#signupPassword"
            }
        },
        messages: {
            signupName: {
                required: "Full Name is required."
            },
            signupEmail: {
                required: "Email is required."
            },
            signupPassword: {
                required: "Password is required.",
                minlength: "Password must be at least 8 characters."
            },
            signupConfirmPassword: {
                required: "Please confirm your password.",
                equalTo: "Passwords do not match."
            }
        },
        errorPlacement: function(error, element) {
            if (element.closest('.password-wrapper').length) {
                error.insertAfter(element.closest('.password-wrapper'));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            const formData = $(form).serialize() + '&action=signup';
            $.ajax({
                type: 'POST',
                url: 'auth_handler.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        showToast(response.message, 'success');
                        setTimeout(function() {
                            $('#show-login-view').trigger('click');
                            form.reset();
                        }, 1000);
                    } else {
                        showToast(response.message, 'error');
                    }
                },
                error: function() {
                    showToast('An error occurred. Please try again.', 'error');
                }
            });
            return false;
        }
    });

    $('#signupPassword').on('keyup', function() {
        if ($('#signupConfirmPassword').val().length > 0) {
            $('#signupConfirmPassword').valid();
        }
    });

    $('input[type="text"], input[type="email"], textarea').on('keypress', function(event) {
        if (event.which === 32 && $(this).val().length === 0) {
            event.preventDefault();
        }
    });

    $('input[type="email"]').on('input blur', function() {
        $(this).val(function(i, value) {
            return value.replace(/\s/g, '');
        });
    });

    $('#name, #signupName').on('input blur', function() {
        var value = $(this).val();
        var newValue = value.replace(/[^a-zA-Z\s'-]/g, '').replace(/\s\s+/g, ' ');
        if (value !== newValue) {
            $(this).val(newValue);
        }
    });

    $('input[type="text"], textarea').on('blur', function() {
        $(this).val(function(i, value) {
            return $.trim(value);
        });
    });

    $(document).on('input focus click', '.password-wrapper input', function() {
        const wrapper = $(this).closest('.password-wrapper');
        const iconSpan = wrapper.find('.toggle-password');
        if ($(this).val().length > 0) {
            iconSpan.show();
        } else {
            iconSpan.hide();
        }
    });
    
    $(document).on('click', '.toggle-password', function (e) {
        e.preventDefault();
        e.stopPropagation();
        const icon = $(this).find('i');
        const input = $(this).closest('.password-wrapper').find('input');
        
        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            icon.removeClass('bi-eye').addClass('bi-eye-slash');
        } else {
            input.attr('type', 'password');
            icon.removeClass('bi-eye-slash').addClass('bi-eye');
        }
    });
});