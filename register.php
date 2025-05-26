<?php
session_start();

// Database connection
$mysqli = new mysqli("localhost:3307", "root", "", "game_users");
if ($mysqli->connect_errno) {
    $_SESSION['register_error'] = "Database connection failed";
    header("Location: index.php");
    exit();
}

// Get POST data
$username = trim($_POST['username'] ?? '');
$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';
$confirm_password = $_POST['confirm_password'] ?? '';

// Basic validation
if (!$username || !$email || !$password || !$confirm_password) {
    $_SESSION['register_error'] = "All fields are required.";
    header("Location: index.html");
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['register_error'] = "Invalid email address.";
    header("Location: index.html");
    exit();
}
if ($password !== $confirm_password) {
    $_SESSION['register_error'] = "Passwords do not match.";
    header("Location: index.php");
    exit();
}

// Check if user/email exists
$stmt = $mysqli->prepare("SELECT id FROM users WHERE username=? OR email=?");
if (!$stmt) {
    $_SESSION['register_error'] = "Database error: " . $mysqli->error;
    header("Location: index.html");
    exit();
}
$stmt->bind_param("ss", $username, $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->close();
    $_SESSION['register_error'] = "Username or email already exists.";
    header("Location: index.html");
    exit();
}
$stmt->close();

// Hash password and insert user
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $mysqli->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
if (!$stmt) {
    $_SESSION['register_error'] = "Database error: " . $mysqli->error;
    header("Location: index.html");
    exit();
}
$stmt->bind_param("sss", $username, $email, $hashed_password);
if ($stmt->execute()) {
    $stmt->close();
    $mysqli->close();
    $_SESSION['register_success'] = "Registration successful! Please log in.";
    header("Location: index.html");
    exit();
} else {
    $_SESSION['register_error'] = "Registration failed: " . $stmt->error;
    $stmt->close();
    $mysqli->close();
    header("Location: index.html");
    exit();
}
?>