<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping list</title>
</head>
<body>
<header>
    <h2>Shopping List</h2>
    <ul>
        <?php foreach ($list as $item) : ?>
            <li>
                <div><strong><?= $item->title; ?></strong></div>
                <?php if (!empty($item->description)) : ?>
                <p><?= $item->description; ?></p>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>