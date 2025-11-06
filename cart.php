<?php
	require_once 'partials/header.php';
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
		exit();
	}
?>

		<!-- PAGE HEADER -->
		<header class="py-5 bg-light">
			<div class="container text-center">
				<h1 class="display-4">Your Shopping Cart</h1>
			</div>
		</header>

		<!-- CART CONTENT -->
		<section class="py-5">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-8 mx-auto">
						<i class="bi bi-cart-x" style="font-size: 5rem;"></i>
						<h3 class="mt-4">Your cart is currently empty.</h3>
						<p class="text-muted">Looks like you haven't added anything to your cart yet.</p>
						<a href="products.php" class="btn btn-primary mt-3">Continue Shopping</a>
					</div>
				</div>
			</div>
		</section>

<?php require_once 'partials/footer.php'; ?>