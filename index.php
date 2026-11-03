<?php
declare(strict_types=1);
require_once __DIR__ . '/includes/bootstrap.php';
$pageTitle = 'Home';
require __DIR__ . '/includes/header.php';
?>
<main class="container">
    <section class="hero">
        <p class="eyebrow">STEM WIJZER</p>
        <h1>Jouw stem. Jouw toekomst.</h1>
        <p>Ontdek fictieve jongerenpartijen, vergelijk hun ideeën en laat jouw stem horen.</p>
        <div class="actions">
            <a class="button button-primary" href="<?= e(url('pages/partijen.php')) ?>">Bekijk partijen</a>
            <a class="button button-secondary" href="<?= e(url('pages/stemmen.php')) ?>">Naar de stemwijzer</a>
        </div>
    </section>
    <section class="section">
        <h2>Ontdek Stem Wijzer</h2>
        <div class="card-grid">
            <article class="card"><h3>Partijen</h3><p>Bekijk profielen en standpunten van fictieve jongerenpartijen.</p><a href="<?= e(url('pages/partijen.php')) ?>">Bekijk partijen →</a></article>
            <article class="card"><h3>Stemmen</h3><p>Breng een oefenstem uit binnen dit schoolproject.</p><a href="<?= e(url('pages/stemmen.php')) ?>">Stem mee →</a></article>
            <article class="card"><h3>Forum</h3><p>Praat respectvol mee over onderwerpen die jongeren belangrijk vinden.</p><a href="<?= e(url('pages/forum.php')) ?>">Naar het forum →</a></article>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
