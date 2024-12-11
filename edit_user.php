<?php
// edit_user.php
require_once 'db.php';

if (!isset($_GET['id'])) {
    echo 'Неверный запрос.';
    exit;
}

$user_id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $goal = $_POST['goal'];

    $sql = "UPDATE users SET height = ?, weight = ?, goal = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$height, $weight, $goal, $user_id]);

    header('Location: admin.php');
}
?>

<form method="POST" action="edit_user.php?id=<?= $user['id'] ?>">
    <label for="height">Рост:</label>
    <input type="number" name="height" value="<?= $user['height'] ?>" required><br>

    <label for="weight">Вес:</label>
    <input type="number" name="weight" value="<?= $user['weight'] ?>" required><br>

    <label for="goal">Цель:</label>
    <select name="goal">
        <option value="похудение" <?= $user['goal'] == 'похудение' ? 'selected' : '' ?>>Похудение</option>
        <option value="набор массы" <?= $user['goal'] == 'набор массы' ? 'selected' : '' ?>>Набор массы</option>
    </select><br>

    <button type="submit">Обновить</button>
</form>
