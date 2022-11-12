<?php include 'views/partials/header.php'; ?>
<a href="/articles" class="btn btn-primary">Back</a>
<table class="table table-striped">
    <tbody>
        <tr>
            <th>ID</th>
            <td><?=$article->id?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?=$article->title?></td>
        </tr>
        <tr>
            <th>Content</th>
            <td><?=$article->body?></td>
        </tr>
    </tbody>
</table>

<?php include 'views/partials/footer.php'; ?>