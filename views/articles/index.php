<?php include 'views/partials/header.php'; ?>
    <h1>Articles</h1>
    <?php foreach($articles as $article): ?>
        <?=$article->snippet()?>
    <?php endforeach; ?>
<?php include 'views/partials/footer.php'; ?>