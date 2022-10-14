<?php include 'partials/header.php'; ?>
    <h1>Hello, world!</h1>

    <form action="/page1.php" method="GET">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <input type="submit" class="btn btn-primary">
    </form>

    <ul>
        <?php for($i=0;$i<100; $i++): ?>
            <li>Item <?= $i ?></li>
        <?php endfor; ?>
    </ul>

<?php include 'partials/footer.php'; ?>