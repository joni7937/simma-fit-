<?php
// delete_training_plan.php
session_start();
require_once 'db.php';

// Убедимся, что администратор вошел в систему
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    echo 'Нет доступа.';
    exit;
}

if (isset($_GET['id'])) {
    $training_plan_id = $_GET['id'];

    // Удаляем все связи пользователей с этим планом тренировки
    $sql = "DELETE FROM user_training_plans WHERE training_plan_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$training_plan_id]);

    // Удаляем сам тренировочный план
    $sql = "DELETE FROM training_plans WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$training_plan_id]);

    // Перенаправление обратно в админку
    header('Location: admin.php');
    exit;
} else {
    echo 'Неверный запрос.';
}
?>
