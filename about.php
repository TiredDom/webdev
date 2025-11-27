<?php
$page_title = 'About Us - Vallera';
require_once 'partials/header.php';
?>

<section class="bg-light pb-5" style="padding-top: 140px; padding-bottom: 40px;">
    <div class="container text-center">
        <h1 class="display-4 font-weight-bold" data-aos="fade-up">Our Story</h1>
        <p class="lead text-muted mb-0" data-aos="fade-up" data-aos-delay="100">Designing modern living spaces with timeless elegance and comfort.</p>
    </div>
</section>

<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="dist/img/about-us-image.jpg" class="img-fluid rounded-3" alt="Vallera furniture in a modern living room setting">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h6 class="text-uppercase font-weight-bold letter-spacing-2 mb-3" style="color: #009970;">Who We Are</h6>
                <h2 class="font-weight-bold mb-4">Crafting Furniture for the Modern Era</h2>
                <p class="text-muted mb-4">Vallera began with a simple mission: to make high-quality, minimalist furniture accessible to everyone. We believe that a home should be a sanctuary, a place where design meets functionality.</p>
                <p class="text-muted mb-4">Our pieces are thoughtfully designed and ethically crafted, ensuring that every item not only looks good but stands the test of time. We combine traditional craftsmanship with modern aesthetics.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-light py-5">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-weight-bold">Why Choose Vallera</h2>
            <p class="text-muted">We prioritize quality, design, and customer satisfaction above all.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-3">
                    <i class="bi bi-gem fs-1" style="color: #009970;"></i>
                </div>
                <h5 class="font-weight-semibold">Premium Quality</h5>
                <p class="text-muted small">We use only the finest materials to ensure durability and long-lasting beauty for your home.</p>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-3">
                    <i class="bi bi-palette fs-1" style="color: #009970;"></i>
                </div>
                <h5 class="font-weight-semibold">Minimalist Design</h5>
                <p class="text-muted small">Our aesthetic is clean, modern, and versatile, fitting seamlessly into any interior style.</p>
            </div>
            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="mb-3">
                    <i class="bi bi-tree fs-1" style="color: #009970;"></i>
                </div>
                <h5 class="font-weight-semibold">Sustainability</h5>
                <p class="text-muted small">We are committed to eco-friendly practices, sourcing materials responsibly.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container py-4 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="zoom-in">
                <h2 class="font-weight-bold mb-4">Ready to Transform Your Space?</h2>
                <p class="text-muted mb-4">Explore our latest collection and find the perfect pieces for your home.</p>
                <a href="products.php" class="btn login-button px-5 py-3">Shop Collection</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'partials/site-footer.php';
require_once 'partials/footer.php';
?>