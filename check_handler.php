<?php
require_once 'config/db_connection.php';

try {
    if (isset($_GET['signupContact'])) {
        $contactNumber = $_GET['signupContact'];
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE contact_number = :contact_number");
        $stmt->execute(['contact_number' => $contactNumber]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            echo json_encode('This contact number is already registered.');
        } else {
            echo json_encode(true);
        }
        exit();
    }

    if (isset($_GET['signupEmail'])) {
        $email = $_GET['signupEmail'];
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            echo json_encode('This email address is already in use.');
        } else {
            echo json_encode(true);
        }
        exit();
    }

} catch (PDOException $e) {
    echo json_encode('Database error.');
    exit();
}

echo json_encode(false);
?>