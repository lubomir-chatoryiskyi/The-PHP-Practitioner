<?php require 'partials/header.view.php'; ?>
<?php require 'partials/navigation.view.php'; ?>

<!--<h2>Shopping List</h2>
<ul>
    <?php /*foreach ($list as $item) : */?>
        <li>
            <div><strong><?/*= $item->title; */?></strong></div>
            <?php /*if (!empty($item->description)) : */?>
                <p><?/*= $item->description; */?></p>
            <?php /*endif; */?>
        </li>
    <?php /*endforeach; */?>
</ul>-->

    <h1>Submit your name</h1>

    <form method="post" action="/names">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.view.php'; ?>