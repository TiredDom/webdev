<?php
$page_title = 'Products';
require_once 'partials/header.php';
?>

<section class="py-5" style="padding-top: 140px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="d-none d-lg-block" data-aos="fade-up" data-aos-once="true">
                    <h2 class="mb-4">Filters</h2>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search products...">
                            <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category">
                                <option selected>All</option>
                                <option value="1">Living Room</option>
                                <option value="2">Bedroom</option>
                                <option value="3">Dining</option>
                                <option value="4">Office</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <select class="form-select" id="price">
                                <option selected>Any</option>
                                <option value="1">Under ₱100</option>
                                <option value="2">₱100 to ₱500</option>
                                <option value="3">₱500 to ₱1000</option>
                                <option value="4">Over ₱1000</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sort" class="form-label">Sort by</label>
                            <select class="form-select" id="sort">
                                <option selected>Featured</option>
                                <option value="1">Price: Low to High</option>
                                <option value="2">Price: High to Low</option>
                                <option value="3">Newest</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 login-button">Apply Filters</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up" data-aos-once="true">
                    <h2 class="m-0">Our Collection</h2>
                    <a href="#" class="btn login-button d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas">
                        <i class="bi bi-funnel-fill me-2"></i> Filters
                    </a>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 g-4" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                    <?php for ($i = 0; $i < 9; $i++): ?>
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="https://placehold.co/400x400/f8f9fa/333333?text=Furniture" class="card-img-top" alt="Product Image">
                            <div class="card-body text-center">
                                <h5 class="card-title font-weight-semibold">Product Name</h5>
                                <p class="text-muted">₱199.99</p>
                                <a href="#" class="btn btn-outline-dark btn-sm rounded-pill w-100">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="filterOffcanvas" aria-labelledby="filterOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="filterOffcanvasLabel">Filters</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search products...">
                <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
            </div>
            <div class="mb-3">
                <label for="category-offcanvas" class="form-label">Category</label>
                <select class="form-select" id="category-offcanvas">
                    <option selected>All</option>
                    <option value="1">Living Room</option>
                    <option value="2">Bedroom</option>
                    <option value="3">Dining</option>
                    <option value="4">Office</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="price-offcanvas" class="form-label">Price</label>
                <select class="form-select" id="price-offcanvas">
                    <option selected>Any</option>
                    <option value="1">Under ₱100</option>
                    <option value="2">₱100 to ₱500</option>
                    <option value="3">₱500 to ₱1000</option>
                    <option value="4">Over ₱1000</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="sort-offcanvas" class="form-label">Sort by</label>
                <select class="form-select" id="sort-offcanvas">
                    <option selected>Featured</option>
                    <option value="1">Price: Low to High</option>
                    <option value="2">Price: High to Low</option>
                    <option value="3">Newest</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 login-button">Apply Filters</button>
        </form>
    </div>
</div>

<?php
require_once 'partials/site-footer.php';
require_once 'partials/footer.php';
?>
