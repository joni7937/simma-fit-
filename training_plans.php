<?php
// training_plans.php
session_start();
require_once 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Получаем список доступных тренировок
$sql = "SELECT * FROM training_plans";
$stmt = $pdo->query($sql);
$training_plans = $stmt->fetchAll();

// Проверка, присоединился ли пользователь к тренировке
$sql_joined = "SELECT * FROM user_training_plans WHERE user_id = ?";
$stmt_joined = $pdo->prepare($sql_joined);
$stmt_joined->execute([$user_id]);
$joined_plans = $stmt_joined->fetchAll();
$joined_plan_ids = array_column($joined_plans, 'training_plan_id');
?>

<h1>Доступные тренировки</h1>
<table>
    <tr>
        <th>Название</th>
        <th>Описание</th>
        <th>Даты</th>
        <th>Присоединиться</th>
    </tr>
    <?php foreach ($training_plans as $plan): ?>
        <tr>
            <td><?= $plan['title'] ?></td>
            <td><?= $plan['description'] ?></td>
            <td><?= $plan['start_date'] ?> - <?= $plan['end_date'] ?></td>
            <td>
                <?php if (in_array($plan['id'], $joined_plan_ids)): ?>
                    Уже присоединились
                <?php else: ?>
                    <a href="join_training.php?id=<?= $plan['id'] ?>">Присоединиться</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
