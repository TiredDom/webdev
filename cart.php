<?php
$page_title = 'Your Cart - Vallera';
require_once 'partials/header.php';
?>

<section class="bg-light py-5" style="min-height: 100vh; padding-top: 140px !important;">
    <div class="container">
        <h1 class="font-weight-bold mb-5" data-aos="fade-up">Shopping Cart</h1>

        <div class="row g-5">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white p-5 rounded-4 shadow-sm text-center d-flex flex-column align-items-center justify-content-center" style="min-height: 300px;">
                    <div class="mb-4 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <i class="bi bi-cart-x" style="font-size: 3rem; color: #adb5bd;"></i>
                    </div>
                    <h3 class="font-weight-bold mb-2">Your cart is empty</h3>
                    <p class="text-muted mb-4">Looks like you haven't added anything to your cart yet.</p>
                    <a href="products.php" class="btn login-button px-4 py-2">Start Shopping</a>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-4 rounded-4 shadow-sm position-sticky" style="top: 120px;">
                    <h5 class="font-weight-bold mb-4">Order Summary</h5>
                    
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span class="font-weight-semibold">$0.00</span>
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <span class="text-muted">Tax</span>
                        <span class="font-weight-semibold">$0.00</span>
                    </div>
                    
                    <div class="border-top pt-3 mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="font-weight-bold mb-0">Total</h5>
                            <h5 class="font-weight-bold mb-0" style="color: #009970;">$0.00</h5>
                        </div>
                    </div>

                    <button class="btn login-button w-100 py-2" disabled>Proceed to Checkout</button>
                    <p class="small text-muted text-center mt-3 mb-0"><i class="bi bi-lock-fill me-1"></i>Secure Checkout</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'partials/site-footer.php';
require_once 'partials/footer.php';
?>