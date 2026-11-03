<?php $pageTitle = $pageTitle ?? APP_NAME; ?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stem Wijzer: ontdek fictieve jongerenpartijen en hun ideeën.">
    <title><?= e($pageTitle) ?> | <?= e(APP_NAME) ?></title>
    <link rel="stylesheet" href="<?= e(url('assets/css/style.css')) ?>">
    <script src="<?= e(url('assets/js/main.js')) ?>" defer></script>
</head>
<body>
<header class="site-header">
    <div class="nav-wrap">
        <a class="brand" href="<?= e(url('index.php')) ?>">STEM <span>WIJZER</span></a>
        <nav aria-label="Hoofdnavigatie">
            <a href="<?= e(url('pages/partijen.php')) ?>">Partijen</a>
            <a href="<?= e(url('pages/stemmen.php')) ?>">Stemmen</a>
            <a href="<?= e(url('pages/resultaten.php')) ?>">Resultaten</a>
            <a href="<?= e(url('pages/forum.php')) ?>">Forum</a>
        </nav>
    </div>
</header>
