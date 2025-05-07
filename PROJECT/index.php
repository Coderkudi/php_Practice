<?php
session_start();

// Database connection
try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdatabase", "root", "");
} catch (PDOException $e) {
    die("DB connection failed: " . $e->getMessage());
}

// Registration logic
if (isset($_POST['register'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $email, $password])) {
        echo "<p>Registration successful! You can now log in.</p>";
    } else {
        echo "<p>Registration failed. Maybe email already used.</p>";
    }
}

// Login logic
if (isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        echo "<p>Welcome, {$user['username']}!</p>";
    } else {
        echo "<p>Invalid login credentials.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User System (One File)</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="register">Register</button>
    </form>

    <h2>Login</h2>
    <form method="POST">
        <input type="email" name="login_email" placeholder="Email" required><br>
        <input type="password" name="login_password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
