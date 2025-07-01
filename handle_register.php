<?php
session_start();
require_once 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $security_code = trim($_POST['security_code'] ?? '');

    // Validation
    $errors = [];

    // Username validation
    if (empty($username) || strlen($username) < 5 || strlen($username) > 20 || !preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        $errors[] = "Username must be 5-20 characters and contain only letters, numbers, and underscores";
    }

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    }

    // Password validation
    if (empty($password) || strlen($password) < 8 || 
        !preg_match('/[A-Z]/', $password) || 
        !preg_match('/[a-z]/', $password) || 
        !preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must be at least 8 characters and contain uppercase, lowercase, and numbers";
    }

    // Confirm password
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    // Security code validation (you can change this to your desired code)
    $valid_security_code = "TNEBEA2024"; // Change this to your desired security code
    if ($security_code !== $valid_security_code) {
        $errors[] = "Invalid security code";
    }

    // Check if username already exists
    $stmt = $conn->prepare("SELECT id FROM admin_users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        $errors[] = "Username already exists";
    }

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM admin_users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        $errors[] = "Email already exists";
    }

    if (empty($errors)) {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Update database schema to include email
        $conn->query("ALTER TABLE admin_users ADD COLUMN IF NOT EXISTS email VARCHAR(255) UNIQUE");

        // Insert new user
        $stmt = $conn->prepare("INSERT INTO admin_users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['success'] = "Registration successful! You can now login.";
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error'] = "Registration failed: " . $conn->error;
        }
    } else {
        $_SESSION['error'] = implode("<br>", $errors);
    }

    if (isset($_SESSION['error'])) {
        header("Location: register.php");
        exit();
    }
}

// If not POST request or any other case, redirect to register page
header("Location: register.php");
exit();
?> 