<?php
$page_title = 'Welcome to Vallera';
require_once 'partials/header.php';
?>

<section class="hero-section d-flex justify-content-center align-items-center">
    <div class="container text-center text-white">
        <h1 class="display-3 font-weight-bold" data-aos="fade-up">Vallera</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">Furniture that speaks your style.</p>
        <a href="#" class="btn btn-lg login-button mt-3" data-aos="fade-up" data-aos-delay="200">Shop Our Collection</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-weight-bold">Shop by Category</h2>
            <p class="text-muted">Find the perfect pieces for every room in your home.</p>
        </div>
        <div class="row g-4">
            <!-- Category 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border-0 h-100 text-center">
                        <div class="overflow-hidden rounded-3 mb-3">
                            <img src="https://placehold.co/600x400/f8f9fa/333333?text=Living+Room" class="card-img-top w-100" alt="Living Room">
                        </div>
                        <h5 class="card-title font-weight-semibold">Living Room</h5>
                        <p class="text-muted small">Sofas, Coffee Tables, & More</p>
                    </div>
                </a>
            </div>
            <!-- Category 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border-0 h-100 text-center">
                        <div class="overflow-hidden rounded-3 mb-3">
                            <img src="https://placehold.co/600x400/f8f9fa/333333?text=Bedroom" class="card-img-top w-100" alt="Bedroom">
                        </div>
                        <h5 class="card-title font-weight-semibold">Bedroom</h5>
                        <p class="text-muted small">Beds, Dressers, & Nightstands</p>
                    </div>
                </a>
            </div>
            <!-- Category 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border-0 h-100 text-center">
                        <div class="overflow-hidden rounded-3 mb-3">
                            <img src="https://placehold.co/600x400/f8f9fa/333333?text=Dining" class="card-img-top w-100" alt="Dining">
                        </div>
                        <h5 class="card-title font-weight-semibold">Dining</h5>
                        <p class="text-muted small">Tables, Chairs, & Storage</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-weight-bold">Featured Products</h2>
            <p class="text-muted">A selection of our most popular and newest items.</p>
        </div>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://placehold.co/400x400/eaeaea/333333?text=Chair" class="card-img-top" alt="Modern Armchair">
                        <span class="badge bg-dark position-absolute top-0 start-0 m-3">New</span>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-semibold">Modern Armchair</h6>
                        <p class="text-muted mb-3">₱249.00</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://placehold.co/400x400/eaeaea/333333?text=Lamp" class="card-img-top" alt="Minimalist Lamp">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-semibold">Minimalist Lamp</h6>
                        <p class="text-muted mb-3">₱89.00</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://placehold.co/400x400/eaeaea/333333?text=Table" class="card-img-top" alt="Coffee Table">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-semibold">Oak Coffee Table</h6>
                        <p class="text-muted mb-3">₱199.00</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://placehold.co/400x400/eaeaea/333333?text=Sofa" class="card-img-top" alt="Velvet Sofa">
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-semibold">Velvet Sofa</h6>
                        <p class="text-muted mb-3">₱899.00</p>
                        <button class="btn btn-outline-dark btn-sm rounded-pill w-100">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up">
            <a href="#" class="btn btn-link text-dark text-decoration-none fw-bold">View All Products <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-weight-bold">Why Choose Vallera?</h2>
            <p class="text-muted">We provide quality, comfort, and style you can trust.</p>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-3 text-success">
                    <i class="bi bi-truck fs-1"></i>
                </div>
                <h5 class="font-weight-semibold">Fast & Free Shipping</h5>
                <p class="text-muted small px-4">Enjoy free shipping on all orders over $500. We deliver straight to your doorstep.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-3 text-success">
                    <i class="bi bi-shield-check fs-1"></i>
                </div>
                <h5 class="font-weight-semibold">Quality Guaranteed</h5>
                <p class="text-muted small px-4">Hand-picked materials and expert craftsmanship ensure our furniture lasts a lifetime.</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="mb-3 text-success">
                    <i class="bi bi-arrow-repeat fs-1"></i>
                </div>
                <h5 class="font-weight-semibold">Easy Returns</h5>
                <p class="text-muted small px-4">Not satisfied? Return it within 30 days for a full refund. No questions asked.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="font-weight-bold">What Our Customers Say</h2>
        </div>
        <div class="row justify-content-center g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="text-warning mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="text-muted mb-4">"Absolutely love my new sofa! The quality is incredible and it arrived faster than expected. Vallera has transformed my living room."</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-secondary rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">DG</div>
                        <div class="ms-3">
                            <h6 class="mb-0 font-weight-semibold">Dominic Gonzales</h6>
                            <small class="text-muted">Verified Buyer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="text-warning mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="text-muted mb-4">"The minimalist design is exactly what I was looking for. Great prices and excellent customer service. Highly recommended!"</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-secondary rounded-circle text-white d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">CR</div>
                        <div class="ms-3">
                            <h6 class="mb-0 font-weight-semibold">Cristina Ranara</h6>
                            <small class="text-muted">Verified Buyer</small>
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