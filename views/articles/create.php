<?php include 'views/partials/header.php'; ?>

<form action="/articles" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Some cool title here...">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" name="body" rows="12"></textarea>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">File</label>
        <input type="file" class="form-control" id="file" name="file">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Create">
    </div>
</form>

<?php include 'views/partials/footer.php'; ?>