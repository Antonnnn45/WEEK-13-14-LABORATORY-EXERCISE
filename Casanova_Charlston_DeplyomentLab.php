<?php
require_once 'db/tasks.php';
require_once 'views/partials.php';

$predefinedTasks = [
    "06:00 AM - Wake up",
    "06:30 AM - Eat breakfast",
    "07:00 AM - Go to school",
    "10:00 AM - Go to the gym",
    "12:00 PM - Attend coding activity",
    "03:00 PM - Play basketball"
];

initializeTasks($predefinedTasks);

if (isset($_POST['add_predefined_task'])) {
    [$time, $desc] = explode(' - ', $_POST['predefined_task']);
    addTask('predefined', $_POST['predefined_date'], $time, $desc);
}
if (isset($_POST['add_custom_task'])) {
    addTask('custom', $_POST['custom_date'], $_POST['custom_time'], $_POST['custom_description']);
}
if (isset($_POST['toggle_index'])) {
    toggleTask((int)$_POST['toggle_index']);
}
if (isset($_GET['delete'])) {
    deleteTask((int)$_GET['delete']);
}

$tasks = getAllTasks();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Planner (Best Practice)</title>
    <style>
        body { font-family: Arial; background: #f7f7f7; padding: 20px; }
        h1 { color: #222; }
        form, table { background: #fff; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        input, select { padding: 8px; margin: 5px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border-bottom: 1px solid #ccc; }
        .completed { text-decoration: line-through; color: green; }
    </style>
</head>
<body>

<h1>📅 To-do List </h1>

<?php
renderPredefinedForm($predefinedTasks);
renderCustomTaskForm();
renderTaskTable($tasks);
?>

</body>
</html>
