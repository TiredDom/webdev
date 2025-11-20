<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

if ($_SESSION['user_role'] !== 'admin') {
    $page_title = 'Access Denied - Vallera';
    require_once 'partials/header.php';
?>
    <section class="bg-light py-5" style="min-height: 100vh; padding-top: 140px !important;">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-6 text-center">
                    <div class="bg-white p-5 rounded-4 shadow-sm">
                        <div class="mb-4 text-danger">
                            <i class="bi bi-exclamation-octagon-fill" style="font-size: 4rem;"></i>
                        </div>
                        <h2 class="font-weight-bold mb-3">Access Denied</h2>
                        <p class="text-muted mb-4">You do not have permission to access this page. This area is restricted to administrators only.</p>
                        <a href="index.php" class="btn login-button px-4 py-2">Return Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    require_once 'partials/site-footer.php';
    require_once 'partials/footer.php';
    exit;
}

$page_title = 'Admin Dashboard - Vallera';
require_once 'partials/header.php';
?>

<section class="bg-light py-5" style="min-height: 100vh; padding-top: 140px !important;">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-8 text-center">
                <div class="bg-white p-5 rounded-4 shadow-sm">
                    <div class="mb-4 bg-light rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="bi bi-speedometer2 fs-1" style="color: #009970;"></i>
                    </div>
                    <h1 class="font-weight-bold mb-3">Admin Dashboard</h1>
                    <p class="lead text-muted mb-4">Welcome back, <?php echo htmlspecialchars($_SESSION['user_name']); ?>. You have full control.</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="index.php" class="btn btn-outline-dark px-4 py-2">View Site</a>
                        <a href="logout.php" class="btn login-button px-4 py-2">Logout</a>
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