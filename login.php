<?php
session_start();

$mysqli = new mysqli("localhost:3307", "root", "", "game_users");
if ($mysqli->connect_errno) {
    $_SESSION['login_error'] = "Database connection failed";
    header("Location: index.php");
    exit();
}

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!$email || !$password) {
    $_SESSION['login_error'] = "All fields are required.";
    header("Location: index.php");
    exit();
}

$stmt = $mysqli->prepare("SELECT id, username, password_hash FROM users WHERE email=?");
if (!$stmt) {
    $_SESSION['login_error'] = "Database error: " . $mysqli->error;
    header("Location: index.php");
    exit();
}
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $stmt->bind_result($id, $username, $hashed_password);
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        $_SESSION['login_success'] = "Login successful! Welcome, $username.";
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $username; // This line enables the greeting!
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Incorrect password.";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['login_error'] = "No account found with that email.";
    header("Location: index.php");
    exit();
}
?>