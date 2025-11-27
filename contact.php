<?php
$page_title = 'Contact Us - Vallera';
require_once 'partials/header.php';
?>

<section class="bg-light pb-5" style="padding-top: 140px; padding-bottom: 40px;">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold" data-aos="fade-up">Get in Touch</h1>
        <p class="lead text-muted mb-0" data-aos="fade-up" data-aos-delay="100">We'd love to hear from you. Send us a message or visit our physical store.</p>
    </div>
</section>

<section class="py-5">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <h3 class="font-weight-bold mb-4">Send us a Message</h3>
                <form id="contactForm" novalidate>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="6" placeholder="How can we help you?"></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn login-button px-5 py-2">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                <div class="ps-lg-5">
                    <h3 class="font-weight-bold mb-4">Contact Information</h3>
                    
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-geo-alt-fill fs-5" style="color: #009970;"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="font-weight-semibold mb-1">Our Physical Store</h5>
                            <p class="text-muted mb-0">1220 Random Village, Langgam<br>San Pedro, Philippines</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-envelope-fill fs-5" style="color: #009970;"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="font-weight-semibold mb-1">Email Us</h5>
                            <p class="text-muted mb-0">business-mail@vallera.com</p>
                            <p class="text-muted mb-0">support@vallera.com</p>
                        </div>
                    </div>

                    <div class="d-flex mb-5">
                        <div class="flex-shrink-0">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="bi bi-telephone-fill fs-5" style="color: #009970;"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="font-weight-semibold mb-1">Call Us</h5>
                            <p class="text-muted mb-0">(+63) 9919 888 1220</p>
                        </div>
                    </div>

                    <div class="bg-light p-4 rounded-3">
                        <h5 class="font-weight-bold mb-3"><i class="bi bi-clock me-2"></i>Business Hours</h5>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Monday - Friday</span>
                            <span class="font-weight-semibold">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="text-muted">Saturday</span>
                            <span class="font-weight-semibold">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">Sunday</span>
                            <span class="font-weight-semibold">Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'partials/site-footer.php';
require_once 'partials/footer.php';
?>