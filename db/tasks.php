<?php
require_once 'connection.php';

function initializeTasks($predefinedTasks) {
    $db = getDbConnection();

    $db->exec("CREATE TABLE IF NOT EXISTS tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        type VARCHAR(50),
        date DATE,
        time TIME,
        description TEXT,
        completed TINYINT(1) DEFAULT 0
    )");

    $count = $db->query("SELECT COUNT(*) FROM tasks")->fetchColumn();
    if ($count == 0) {
        $today = date('Y-m-d');
        $stmt = $db->prepare("INSERT INTO tasks (type, date, time, description) VALUES ('predefined', ?, ?, ?)");
        foreach ($predefinedTasks as $task) {
            [$time, $desc] = explode(' - ', $task);
            $convertedTime = date("H:i:s", strtotime($time)); // convert to 24-hour format
            $stmt->execute([$today, $convertedTime, $desc]);
        }
    }
}

function getAllTasks() {
    $db = getDbConnection();
    return $db->query("SELECT * FROM tasks ORDER BY date, time")->fetchAll(PDO::FETCH_ASSOC);
}

function addTask($type, $date, $time, $desc) {
    $db = getDbConnection();
    $convertedTime = date("H:i:s", strtotime($time)); // convert to 24-hour format
    $stmt = $db->prepare("INSERT INTO tasks (type, date, time, description) VALUES (?, ?, ?, ?)");
    $stmt->execute([$type, $date, $convertedTime, $desc]);
}

function toggleTask($id) {
    $db = getDbConnection();
    $stmt = $db->prepare("UPDATE tasks SET completed = NOT completed WHERE id = ?");
    $stmt->execute([$id]);
}

function deleteTask($id) {
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->execute([$id]);
}
?>
