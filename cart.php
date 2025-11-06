<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Your Cart - E-Shop</title>
		<link rel="stylesheet" href="dist/css/styles.css" />
		<link rel="stylesheet" href="dist/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="dist/css/bootstrap-icons.min.css" />
	</head>
	<body class="d-flex flex-column min-vh-100">
		<div class="page-blur-backdrop"></div>
		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="dist/images/logo-light.svg" alt="Vallera Logo" />
				</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarNav"
					aria-controls="navbarNav"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item">
							<a class="nav-link active" href="cart.php">
								<i class="bi bi-cart-fill me-1"></i> Cart
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
								<i class="bi bi-person-fill me-2"></i>Login
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

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

		<!-- FOOTER -->
		<footer class="bg-dark text-white text-center py-3 mt-auto">
			<p class="mb-0">© 2025 Vallera E-Shop | Designed for demo purposes</p>
		</footer>

		<!-- TOAST CONTAINER -->
		<div class="toast-container position-fixed top-0 end-0 p-3">
			<!-- TOAST TEMPLATE -->
			<div id="toast-template" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
				<div class="toast-header">
					<i class="bi me-2"></i>
					<strong class="me-auto toast-title">Notification</strong>
					<small>Just now</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					This is a sample message.
				</div>
			</div>
		</div>

		<script src="dist/js/jquery.min.js"></script>
		<script src="dist/js/bootstrap.bundle.min.js"></script>
		<script src="dist/js/jquery.validate.min.js"></script>
		<script src="dist/js/jquery-ui.min.js"></script>
		<script src="dist/js/main.js"></script>

		<div id="modal-placeholder"></div>
	</body>
</html>