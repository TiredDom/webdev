<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vallera</title>
    <link rel="stylesheet" href="dist/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top <?php echo ($current_page != 'index.php') ? 'navbar-dark-static' : ''; ?>">
        <div class="container-fluid position-relative">
            <a class="navbar-brand" href="index.php">Vallera</a>

            <div class="d-none d-lg-block position-absolute top-50 start-50 translate-middle">
                <ul class="navbar-nav flex-row gap-4">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'products.php' ? 'active' : ''; ?>" href="products.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About</a>
                    </li>
                </ul>
            </div>

            <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $current_page == 'products.php' ? 'active' : ''; ?>" href="products.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $current_page == 'cart.php' ? 'active' : ''; ?>" href="cart.php"><i class="bi bi-cart-fill me-2"></i>Cart</a>
                        </li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link login-trigger" href="#"><i class="bi bi-person me-2"></i>Login</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <a href="cart.php" class="icon-link d-none d-lg-block me-2"><i class="bi bi-cart-fill fs-5"></i></a>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="logout.php" class="login-button d-none d-lg-block"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                <?php else: ?>
                    <a href="#" class="login-button d-none d-lg-block login-trigger"><i class="bi bi-person me-2"></i>Login</a>
                <?php endif; ?>
                <button class="navbar-toggler pe-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>

    <div class="toast-container position-fixed end-0 p-3 toast-custom-position"></div>

    <div id="toast-template" class="toast align-items-center border-0 d-none" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body d-flex align-items-center gap-2">
                <i class="bi fs-5"></i>
                <div>
                    <strong class="toast-title d-block">Notification</strong>
                    <span class="toast-message small"></span>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>