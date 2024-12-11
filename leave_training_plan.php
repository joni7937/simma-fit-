<?php
// leave_training_plan.php
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

    // Удаляем пользователя из выбранного тренировочного плана
    $sql = "DELETE FROM user_training_plans WHERE user_id = ? AND training_plan_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id, $training_plan_id]);

    echo "Вы успешно отсоединились от плана!";
} else {
    echo 'Неверный запрос.';
}

// Перенаправляем обратно на страницу профиля
header('Location: profile.php');
exit;
