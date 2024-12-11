<?php
// create_training.php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    echo 'Нет доступа.';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $sql = "INSERT INTO training_plans (title, description, start_date, end_date)
            VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $description, $start_date, $end_date]);

    header('Location: admin.php'); // Перенаправление на админку
}
?>

<form method="POST" action="create_training.php">
    <label for="title">Название тренировки:</label>
    <input type="text" name="title" required><br>

    <label for="description">Описание:</label>
    <textarea name="description" required></textarea><br>

    <label for="start_date">Дата начала:</label>
    <input type="date" name="start_date" required><br>

    <label for="end_date">Дата окончания:</label>
    <input type="date" name="end_date" required><br>

    <button type="submit">Создать план тренировки</button>
</form>
