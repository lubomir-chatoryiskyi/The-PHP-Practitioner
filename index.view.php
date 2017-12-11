<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $greeting; ?></title>
</head>
<body>
<header>

    <h2>Animals</h2>
    <ul>
        <?php foreach ($animals as $animal) : ?>
            <li><?= $animal; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Person</h2>
    <ul>
        <?php foreach ($person as $feature => $value) : ?>
            <li><strong><?= $feature; ?>:</strong> <?= $value; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Task</h2>
    <p><strong>Task Title:</strong> <?= $task['title'] ?></p>
    <p><strong>Person Responsible:</strong> <?= $task['assigned_to'] ?></p>
    <p><strong>Due Date:</strong> <?= $task['due_date'] ?></p>
    <p><strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ?></p>
</header>
</body>
</html>