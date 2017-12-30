<?php require 'partials/header.view.php'; ?>
<?php require 'partials/navigation.view.php'; ?>

    <h2>Users List</h2>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li>
                <div><strong><?= $user->name; ?></strong></div>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit your name</h1>

    <form method="post" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.view.php'; ?>