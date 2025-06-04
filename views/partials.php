<?php
function renderPredefinedForm($predefinedTasks) {
    echo '<form method="POST">
        <h3>Add from Predefined Tasks</h3>
        <label>Select Task:</label>
        <select name="predefined_task" required>';
    foreach ($predefinedTasks as $task) {
        echo "<option value=\"$task\">$task</option>";
    }
    echo '</select>
        <label>Date:</label>
        <input type="date" name="predefined_date" required>
        <input type="submit" name="add_predefined_task" value="Add">
    </form>';
}

function renderCustomTaskForm() {
    echo '<form method="POST">
        <h3>Add Custom Task</h3>
        <label>Date:</label>
        <input type="date" name="custom_date" required>
        <label>Time:</label>
        <input type="time" name="custom_time" required>
        <label>Description:</label>
        <input type="text" name="custom_description" required>
        <input type="submit" name="add_custom_task" value="Add Custom Task">
    </form>';
}

function renderTaskTable($tasks) {
    if (empty($tasks)) {
        echo "<p>No tasks yet. Add one above!</p>";
        return;
    }

    echo '<table>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Task</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>';
    foreach ($tasks as $task) {
        $checked = $task['completed'] ? 'checked' : '';
        $desc = htmlspecialchars($task['description']);
        $date = htmlspecialchars($task['date']);
        $time = htmlspecialchars($task['time']);
        $id = $task['id'];
        $statusClass = $task['completed'] ? 'completed' : '';

        echo "<tr>
            <td>$date</td>
            <td>$time</td>
            <td class='$statusClass'>$desc</td>
            <td>
                <form method='POST' style='display:inline'>
                    <input type='hidden' name='toggle_index' value='$id'>
                    <input type='checkbox' onchange='this.form.submit()' $checked>
                </form>
            </td>
            <td><a href='?delete=$id' onclick='return confirm(\"Delete this task?\")'>Delete</a></td>
        </tr>";
    }
    echo '</table>';
}
?>
