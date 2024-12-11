<?php
// register.php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $goal = $_POST['goal'];

    $sql = "INSERT INTO users (username, email, password, height, weight, goal) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $email, $password, $height, $weight, $goal]);

    header('Location: login.php');
}
?>

<form method="POST" action="register.php">
    <label for="username">Имя пользователя:</label>
    <input type="text" name="username" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" required><br>

    <label for="height">Рост:</label>
    <input type="number" name="height" required><br>

    <label for="weight">Вес:</label>
    <input type="number" name="weight" required><br>

    <label for="goal">Цель:</label>
    <select name="goal">
        <option value="похудение">Похудение</option>
        <option value="набор массы">Набор массы</option>
    </select><br>

    <button type="submit">Зарегистрироваться</button>
</form>
