<?php
session_start();

require_once 'config/db_connection.php';

$response = [
    'status' => 'error',
    'message' => 'Invalid request or action specified.'
];

if (isset($_POST['action'])) {

    // --- SIGNUP LOGIC ---
    if ($_POST['action'] === 'signup') {
        $fullName = $_POST['signupName'] ?? '';
        $contactNumber = $_POST['signupContact'] ?? '';
        $email = $_POST['signupEmail'] ?? '';
        $password = $_POST['signupPassword'] ?? '';

        if (empty($fullName) || empty($contactNumber) || empty($email) || empty($password)) {
            $response['message'] = 'Please fill in all required fields.';
        } else {
            try {
                $stmt = $pdo->prepare("SELECT email, contact_number FROM users WHERE email = :email OR contact_number = :contact_number");
                $stmt->execute(['email' => $email, 'contact_number' => $contactNumber]);
                $existingUser = $stmt->fetch();

                if ($existingUser) {
                    if ($existingUser['email'] === $email) {
                        $response['message'] = 'This email address is already in use.';
                        $response['error_field'] = 'signupEmail'; // Critical Addition
                    } else {
                        $response['message'] = 'This contact number is already registered.';
                        $response['error_field'] = 'signupContact'; // Critical Addition
                    }
                } else {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                    $stmt = $pdo->prepare(
                        "INSERT INTO users (full_name, contact_number, email, password) VALUES (:full_name, :contact_number, :email, :password)"
                    );

                    $insertSuccess = $stmt->execute([
                        'full_name' => $fullName,
                        'contact_number' => $contactNumber,
                        'email' => $email,
                        'password' => $hashedPassword
                    ]);

                    if ($insertSuccess) {
                        $response['status'] = 'success';
                        $response['message'] = 'Account created successfully! You can now log in.';
                    } else {
                        $response['message'] = 'An error occurred. Could not create account.';
                    }
                }
            } catch (PDOException $e) {
                $response['message'] = 'A database error occurred. Please try again later.';
            }
        }
    }

    // --- LOGIN LOGIC ---
    if ($_POST['action'] === 'login') {
        $email = $_POST['loginEmail'] ?? '';
        $password = $_POST['loginPassword'] ?? '';

        if (empty($email) || empty($password)) {
            $response['message'] = 'Please enter both email and password.';
        } else {
            try {
                $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
                $stmt->execute(['email' => $email]);
                $user = $stmt->fetch();

                if ($user && password_verify($password, $user['password'])) {
                    session_regenerate_id(true);

                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['full_name'];

                    $response['status'] = 'success';
                    $response['message'] = 'Login successful! Welcome back, ' . htmlspecialchars($user['full_name']) . '.';
                    $response['user_name'] = htmlspecialchars($user['full_name']);
                } else {
                    $response['message'] = 'Invalid email or password.';
                }
            } catch (PDOException $e) {
                $response['message'] = 'A database error occurred. Please try again later.';
            }
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response);
exit();

?>