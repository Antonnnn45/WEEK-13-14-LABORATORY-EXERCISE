<?php
function getDbConnection() {
    $host = 'sql12.freesqldatabase.com';
    $dbname = 'sql12783082';
    $username = 'sql12783082';
    $password = 'sti5iJ3X4d';
    $port = 3306;

    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }
}
?>
