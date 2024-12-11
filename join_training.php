<?php
// join_training_plan.php
session_start();
require_once 'db.php';

// Проверяем, что пользователь вошел в систему
if (!isset($_SESSION['user_id'])) {
    echo 'Пожалуйста, войдите в систему.';
    exit;
}

$user_id = $_SESSION['user_id'];

// Получаем ID тренировочного плана
if (isset($_GET['id'])) {
    $training_plan_id = $_GET['id'];

    // Проверяем, не присоединился ли уже пользователь к этому плану
    $sql_check = "SELECT * FROM user_training_plans WHERE user_id = ? AND training_plan_id = ?";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([$user_id, $training_plan_id]);

    if ($stmt_check->rowCount() == 0) {
        // Добавляем пользователя в тренировочный план
        $sql = "INSERT INTO user_training_plans (user_id, training_plan_id) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $training_plan_id]);

        echo "Вы успешно присоединились к плану!";
    } else {
        echo "Вы уже присоединились к этому плану.";
    }
} else {
    echo 'Неверный запрос.';
}

// Перенаправляем обратно на страницу профиля
header('Location: profile.php');
exit;
