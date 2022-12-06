<!doctype html>
<html lang="en">
<?php require ('partials/head.view.php') ?>

<body>
<main>

    <?php require ('partials/navbar.view.php') ?>
    <section class="container p-4">
        <h1>Početna</h1>
        <hr>
        <h2>Svi filmovi</h2>
        <ul class="list-group">
            <?php foreach ($movies as $movie) : ?>
                <li class="list-group-item">
                    <a href="<?= $movie['url'] ?>"><?= $movie['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <h2>Novi filmovi</h2>
        <ul class="list-group">
            <?php foreach ($newMovies as $movie) : ?>
                <li class="list-group-item">
                    <a href="<?= $movie['url'] ?>"><?= $movie['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php require ('partials/footer.view.php') ?>

