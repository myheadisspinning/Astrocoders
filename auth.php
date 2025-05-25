<?php
// DEBUG: Show all errors (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');
session_start();

// ---- CONFIGURE THESE ----
$db_host = 'localhost:3307';
$db_user = 'root';         // your DB username
$db_pass = '';             // your DB password
$db_name = 'game_users';   // your DB name
$db_port = 3307;           // your MySQL port (use 3306 unless you changed it)
// -------------------------

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
if ($mysqli->connect_errno) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $mysqli->connect_error]);
    exit;
}

function sanitize($str) {
    return htmlspecialchars(trim($str), ENT_QUOTES, 'UTF-8');
}

$action = $_POST['action'] ?? '';

if ($action === 'register') {
    $username = sanitize($_POST['username'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    if (!$username || !$email || !$password || !$confirm) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
        exit;
    }
    if ($password !== $confirm) {
        echo json_encode(['success' => false, 'message' => 'Passwords do not match.']);
        exit;
    }
    if (strlen($password) < 6) {
        echo json_encode(['success' => false, 'message' => 'Password must be at least 6 characters.']);
        exit;
    }
    // Check if username or email exists
    $stmt = $mysqli->prepare("SELECT id FROM users WHERE username=? OR email=?");
    if (!$stmt) {
        echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $mysqli->error]);
        exit;
    }
    $stmt->bind_param('ss', $username, $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo json_encode(['success' => false, 'message' => 'Username or email already exists.']);
        $stmt->close();
        exit;
    }
    $stmt->close();

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $mysqli->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    if (!$stmt) {
        echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $mysqli->error]);
        exit;
    }
    $stmt->bind_param('sss', $username, $email, $hash);
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Registration successful!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Registration failed: ' . $stmt->error]);
    }
    $stmt->close();
    exit;
}

if ($action === 'login') {
    $email = sanitize($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    if (!$email || !$password) {
        echo json_encode(['success' => false, 'message' => 'Email and password required.']);
        exit;
    }
    $stmt = $mysqli->prepare("SELECT id, username, password_hash FROM users WHERE email=?");
    if (!$stmt) {
        echo json_encode(['success' => false, 'message' => 'Prepare failed: ' . $mysqli->error]);
        exit;
    }
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($id, $username, $hash);
    if ($stmt->fetch() && password_verify($password, $hash)) {
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $username;
        echo json_encode(['success' => true, 'message' => 'Login successful!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid credentials.']);
    }
    $stmt->close();
    exit;
}

echo json_encode(['success' => false, 'message' => 'Invalid action.']);