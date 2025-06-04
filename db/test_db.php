<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=student_planner;charset=utf8mb4", "root", "");

    echo "✅ Connected to MySQL successfully.";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
