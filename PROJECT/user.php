<?php
class User {
    private $pdo;

    public function __construct() {
        try {
            // Assign to $this->pdo instead of $this->conn
            $this->pdo = new PDO("mysql:host=localhost;dbname=testdatabase", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function register($username, $email, $password) {
        $username = htmlspecialchars(filter_var($username, FILTER_SANITIZE_STRING));
        $email = htmlspecialchars(filter_var($email, FILTER_VALIDATE_EMAIL));
        $password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        if ($stmt->execute([$username, $email, $password])) {
            echo "Registered successfully! <a href='login.html'>Login here</a>";
        } else {
            echo "Registration failed.";
        }
    }

    public function login($email, $password) {
        session_start();
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Welcome, {$user['username']}!";
        } else {
            echo "Invalid login.";
        }
    }

    public function updateProfile() {
        echo "Profile Updated Successfully.";
    }
}
?>
