<?php
	session_start();
	$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>E-Shop</title>
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
						<li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'products.php') ? 'active' : ''; ?>" href="products.php">Products</a></li>
						<li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">Contact</a></li>
						<li class="nav-item">
							<a id="cart-nav-link" class="nav-link position-relative <?php echo ($currentPage == 'cart.php') ? 'active' : ''; ?>" href="cart.php">
								<i class="bi bi-cart-fill"></i> Cart
								<span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none">0</span>
							</a>
						</li>
						<?php if (isset($_SESSION['user_id'])): ?>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="bi bi-person-fill me-1"></i>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="logout_handler.php">Logout</a></li>
								</ul>
							</li>
						<?php else: ?>
							<li class="nav-item">
								<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
									<i class="bi bi-person-fill me-1"></i>Login
								</a>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-content">