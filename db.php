<?php
// db.php
try {
    $pdo = new PDO('sqlite:database.db'); // Подключение к базе данных SQLite
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Создание таблицы пользователей, если она не существует
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        height INTEGER,
        weight INTEGER,
        goal TEXT
    )");

    // Создание таблицы планов тренировок, если она не существует
    $pdo->exec("CREATE TABLE IF NOT EXISTS training_plans (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        description TEXT,
        start_date DATE,
        end_date DATE
    )");

    // Создание таблицы связи пользователей и планов тренировок, если она не существует
    $pdo->exec("CREATE TABLE IF NOT EXISTS user_training_plans (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER,
        training_plan_id INTEGER,
        joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (user_id) REFERENCES users(id),
        FOREIGN KEY (training_plan_id) REFERENCES training_plans(id)
    )");

    // Создание таблицы тренировок, если она не существует
    $pdo->exec("CREATE TABLE IF NOT EXISTS workouts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        user_id INTEGER,
        day_of_week TEXT,
        exercises TEXT,
        FOREIGN KEY (user_id) REFERENCES users(id)
    )");

} catch (PDOException $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
}
?>
