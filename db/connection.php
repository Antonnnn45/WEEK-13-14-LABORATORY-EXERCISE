<?php
function getDbConnection() {
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $dbname = getenv('DB_NAME') ?: 'student_planner';
    $username = getenv('DB_USER') ?: 'root';
    $password = getenv('DB_PASS') ?: '';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
