<?php require 'partials/header.view.php'; ?>
<?php require 'partials/navigation.view.php'; ?>

    <h2>Users List</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li>
                <div><strong><?= $user->name; ?></strong></div>
                <?php /*if (!empty($item->description)) : */?><!--
                    <p><?/*= $item->description; */?></p>
                --><?php /*endif; */?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit your name</h1>

    <form method="post" action="/names">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.view.php'; ?>