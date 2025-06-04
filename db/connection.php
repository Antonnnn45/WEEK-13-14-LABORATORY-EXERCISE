<?php
function getDbConnection() {
    $env = getenv('APP_ENV') ?: 'production';

    if ($env === 'development') {
        $host = '127.0.0.1';
        $dbname = 'student_planner';
        $username = 'root';
        $password = '';
    } else {
        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $username = getenv('DB_USER');
        $password = getenv('DB_PASS');
    }

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
