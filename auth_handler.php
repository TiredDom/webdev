<?php
session_start();
require_once 'includes/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'signup') {
        $name = trim(strip_tags($_POST['signupName'] ?? ''));
        $email = trim($_POST['signupEmail'] ?? '');
        $password = $_POST['signupPassword'] ?? '';

        if (empty($name) || empty($email) || empty($password)) {
            echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email format.']);
            exit;
        }

        if (strlen($password) < 8) {
            echo json_encode(['status' => 'error', 'message' => 'Password must be at least 8 characters.']);
            exit;
        }

        try {
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->fetch()) {
                echo json_encode(['status' => 'error', 'message' => 'Email already registered.']);
                exit;
            }

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO users (full_name, email, password, role) VALUES (?, ?, ?, 'user')");
            
            if ($stmt->execute([$name, $email, $hashed_password])) {
                echo json_encode(['status' => 'success', 'message' => 'Account created successfully! Please log in.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Registration failed.']);
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            echo json_encode(['status' => 'error', 'message' => 'Database error. Please try again later.']);
        }
        exit;
    }

    if ($action === 'login') {
        $email = trim($_POST['loginEmail'] ?? '');
        $password = $_POST['loginPassword'] ?? '';

        try {
            $stmt = $pdo->prepare("SELECT id, full_name, password, role FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                session_regenerate_id(true);

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['full_name'];
                $_SESSION['user_role'] = $user['role'];

                $redirect = ($user['role'] === 'admin') ? 'admin.php' : 'index.php';

                echo json_encode(['status' => 'success', 'message' => 'Logged in successfully!', 'redirect' => $redirect]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Invalid email or password.']);
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            echo json_encode(['status' => 'error', 'message' => 'Database error.']);
        }
        exit;
    }
}