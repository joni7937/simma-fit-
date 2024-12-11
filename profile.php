<?php
// profile.php
session_start();
require_once 'db.php';

// Проверяем, что пользователь вошел в систему
if (!isset($_SESSION['user_id'])) {
    echo 'Пожалуйста, войдите в систему.';
    exit;
}

$user_id = $_SESSION['user_id'];

// Получаем информацию о пользователе
$sql_user = "SELECT * FROM users WHERE id = ?";
$stmt_user = $pdo->prepare($sql_user);
$stmt_user->execute([$user_id]);
$user = $stmt_user->fetch();

// Получаем тренировочные планы
$sql_plans = "SELECT * FROM training_plans";
$stmt_plans = $pdo->query($sql_plans);
$training_plans = $stmt_plans->fetchAll();
?>

<link rel="stylesheet" href="admin_style.css">
<h1>Профиль пользователя</h1>
<p>Имя: <?= $user['username'] ?></p>
<p>Email: <?= $user['email'] ?></p>
<p>Цель: <?= $user['goal'] ?></p>

<h2>Доступные тренировочные планы</h2>
<?php foreach ($training_plans as $plan): ?>
    <div>
        <h3><?= $plan['title'] ?></h3>
        <p><?= $plan['description'] ?></p>
        <p>Дата начала: <?= $plan['start_date'] ?></p>
        <p>Дата окончания: <?= $plan['end_date'] ?></p>

        <?php
        // Проверяем, присоединился ли пользователь к этому плану
        $sql_check = "SELECT * FROM user_training_plans WHERE user_id = ? AND training_plan_id = ?";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute([$user_id, $plan['id']]);
        $is_joined = $stmt_check->fetch();

        if ($is_joined): ?>
            <a href="leave_training_plan.php?id=<?= $plan['id'] ?>">Отсоединиться от плана</a>
        <?php else: ?>
            <a href="join_training.php?id=<?= $plan['id'] ?>">Присоединиться к плану</a>
        <?php endif; ?>
    </div>
<?php endforeach; ?>
