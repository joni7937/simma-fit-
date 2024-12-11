<?php
// login.php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: profile.php');
    } else {
        echo 'Неверный email или пароль.';
    }
}
?>

<form method="POST" action="login.php">
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Войти</button>
</form>
