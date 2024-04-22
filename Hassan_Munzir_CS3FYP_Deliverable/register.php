<?php
session_start(); // Start the session to use session variables.

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    $_SESSION['flash'] = ['message' => 'Failed to connect to MySQL: ' . mysqli_connect_error(), 'type' => 'error'];
    header('Location: register.php');
    exit;
}

if (!isset($_POST['email'], $_POST['password'], $_POST['password2'])) {
    $_SESSION['flash'] = ['message' => 'Please complete the registration form!', 'type' => 'error'];
    header('Location: register.php');
    exit;
}

if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password2'])) {
    $_SESSION['flash'] = ['message' => 'Please complete all fields!', 'type' => 'error'];
    header('Location: register.php');
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['flash'] = ['message' => 'Invalid email address!', 'type' => 'error'];
    header('Location: register.php');
    exit;
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    $_SESSION['flash'] = ['message' => 'Password must be between 5 and 20 characters long!', 'type' => 'error'];
    header('Location: register.php');
    exit;
}

if ($stmt = $con->prepare('SELECT id FROM accounts WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->close();
        $_SESSION['flash'] = ['message' => 'Email already exists, please choose another!', 'type' => 'error'];
        header('Location: register.php');
        exit;
    }
    $stmt->close();
}

if ($stmt = $con->prepare('INSERT INTO accounts (username, password) VALUES (?, ?)')) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bind_param('ss', $_POST['email'], $password);
    $stmt->execute();
    $stmt->close();
    $_SESSION['flash'] = ['message' => 'Registration successful! You can now login.', 'type' => 'success'];
    header('Location: login.php');
    exit;
} else {
    $_SESSION['flash'] = ['message' => 'Could not prepare statement for registration.', 'type' => 'error'];
    header('Location: register.php');
    exit;
}
$con->close();
?>
