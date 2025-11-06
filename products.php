<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale-1.0" />
		<title>Our Products - E-Shop</title>
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
					<ul class="navbar-nav ms-auto align-items-center">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link active" href="products.php">Products</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item">
							<a class="nav-link position-relative" href="cart.php">
								<i class="bi bi-cart-fill"></i> Cart
								<span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none">0</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
								<i class="bi bi-person-fill me-1"></i>Login
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="page-content">
			<!-- PAGE HEADER -->
			<header class="py-5">
				<div class="container text-center">
					<h1 class="display-4">Our Products</h1>
					<p class="lead text-muted">Browse our collection of premium goods designed to enhance your life and work.</p>
				</div>
			</header>

			<!-- ALL PRODUCTS -->
			<section class="py-5 product-grid">
				<div class="container">
					<div class="row g-lg-5 g-4 justify-content-center">
						<div class="col-6 col-md-6 col-lg-4 col-xl-3">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product1)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details">
												<h1>Elegant Chair</h1>
												<p>₱99.00</p>
											</div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right">
											<div class="action-wrapper">
												<div class="done"><i class="bi bi-check2"></i></div>
												<div class="remove"><i class="bi bi-x"></i></div>
											</div>
											<div class="details">
												<h1>Chair</h1>
												<p>Added to cart</p>
											</div>
										</div>
									</div>
								</div>
								<div class="inside">
									<div class="icon"><i class="bi bi-info-circle"></i></div>
									<div class="contents">
										<table>
											<tr><th>Width</th><th>Height</th></tr>
											<tr><td>80cm</td><td>120cm</td></tr>
											<tr><th>Material</th><th>Color</th></tr>
											<tr><td>Oak Wood</td><td>Natural</td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-4 col-xl-3">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product2)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details">
												<h1>Smart Lamp</h1>
												<p>₱49.00</p>
											</div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right">
											<div class="action-wrapper">
												<div class="done"><i class="bi bi-check2"></i></div>
												<div class="remove"><i class="bi bi-x"></i></div>
											</div>
											<div class="details">
												<h1>Lamp</h1>
												<p>Added to cart</p>
											</div>
										</div>
									</div>
								</div>
								<div class="inside">
									<div class="icon"><i class="bi bi-info-circle"></i></div>
									<div class="contents">
										<table>
											<tr><th>Width</th><th>Height</th></tr>
											<tr><td>30cm</td><td>60cm</td></tr>
											<tr><th>Material</th><th>Color</th></tr>
											<tr><td>Aluminum</td><td>White</td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-4 col-xl-3">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product3)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details">
												<h1>Modern Desk</h1>
												<p>₱199.00</p>
											</div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right">
											<div class="action-wrapper">
												<div class="done"><i class="bi bi-check2"></i></div>
												<div class="remove"><i class="bi bi-x"></i></div>
											</div>
											<div class="details">
												<h1>Desk</h1>
												<p>Added to cart</p>
											</div>
										</div>
									</div>
								</div>
								<div class="inside">
									<div class="icon"><i class="bi bi-info-circle"></i></div>
									<div class="contents">
										<table>
											<tr><th>Width</th><th>Height</th></tr>
											<tr><td>120cm</td><td>75cm</td></tr>
											<tr><th>Material</th><th>Color</th></tr>
											<tr><td>Maple Wood</td><td>Light</td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-6 col-md-6 col-lg-4 col-xl-3">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product4)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details">
												<h1>Headphones</h1>
												<p>₱149.00</p>
											</div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right">
											<div class="action-wrapper">
												<div class="done"><i class="bi bi-check2"></i></div>
												<div class="remove"><i class="bi bi-x"></i></div>
											</div>
											<div class="details">
												<h1>Headphones</h1>
												<p>Added to cart</p>
											</div>
										</div>
									</div>
								</div>
								<div class="inside">
									<div class="icon"><i class="bi bi-info-circle"></i></div>
									<div class="contents">
										<table>
											<tr><th>Connectivity</th><th>Color</th></tr>
											<tr><td>Bluetooth 5.2</td><td>Matte Black</td></tr>
											<tr><th>Battery Life</th><th>Weight</th></tr>
											<tr><td>40 Hours</td><td>220g</td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		<!-- FOOTER -->
		<footer class="mt-auto bg-dark text-white text-center py-3">
			<p class="mb-0">© 2025 Vallera E-Shop | Designed for demo purposes</p>
		</footer>

		<!-- TOAST CONTAINER -->
		<div class="toast-container position-fixed top-0 end-0 p-3">
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