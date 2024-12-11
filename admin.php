<?php
// admin.php
session_start();
require_once 'db.php';

// Убедимся, что администратор вошел в систему
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    echo 'Нет доступа.';
    exit;
}

// Получаем список пользователей
$sql_users = "SELECT * FROM users";
$stmt_users = $pdo->query($sql_users);
$users = $stmt_users->fetchAll();

// Получаем список тренировочных планов
$sql_plans = "SELECT * FROM training_plans";
$stmt_plans = $pdo->query($sql_plans);
$training_plans = $stmt_plans->fetchAll();
?>
<link rel="stylesheet" href="admin_style.css">

<h1>Админка</h1>

<!-- Управление пользователями -->
<h2>Список пользователей</h2>
<table>
    <tr>
        <th>Имя</th>
        <th>Email</th>
        <th>Цель</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['goal'] ?></td>
            <td><a href="edit_user.php?id=<?= $user['id'] ?>">Редактировать</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Управление тренировочными планами -->
<h2>Список тренировочных планов</h2>
<table>
    <tr>
        <th>Название</th>
        <th>Описание</th>
        <th>Дата начала</th>
        <th>Дата окончания</th>
        <th>Участники</th>
        <th>Удалить</th>
    </tr>
    <?php foreach ($training_plans as $plan): ?>
        <tr>
            <td><?= $plan['title'] ?></td>
            <td><?= $plan['description'] ?></td>
            <td><?= $plan['start_date'] ?></td>
            <td><?= $plan['end_date'] ?></td>
            <td>
                <?php
                // Получаем список участников этого плана
                $sql_participants = "SELECT u.username FROM users u 
                                     JOIN user_training_plans utp ON u.id = utp.user_id
                                     WHERE utp.training_plan_id = ?";
                $stmt_participants = $pdo->prepare($sql_participants);
                $stmt_participants->execute([$plan['id']]);
                $participants = $stmt_participants->fetchAll();

                if ($participants) {
                    foreach ($participants as $participant) {
                        echo $participant['username'] . '<br>';
                    }
                } else {
                    echo 'Нет участников';
                }
                ?>
            </td>
            <td>
                <a href="delete_training_plan.php?id=<?= $plan['id'] ?>" onclick="return confirm('Вы уверены, что хотите удалить этот план?')">Удалить</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Создание нового тренировочного плана -->
<h2>Создать новый тренировочный план</h2>
<a href="create_training.php">Создать план тренировки</a>
