
<div class="container theme-showcase" role="main">
    <h1>Pages</h1>
    <p>

    <a class="btn btn-primary" href="./index.php?a=ajouter">Ajouter une page</a>
    </p>
    <table class="table-bordered table-responsive table">
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>Action</th>
        </tr>
        <?php foreach($data as $page):?>
    <tr>
        <td><?=$page->id?></td>
        <td><?=$page->slug?></td>
        <td><?=$page->title?></td>
        <td>
            <a class="btn btn-primary" href="./index.php?a=details&id=<?=$page->id?>"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Voir</a>
            <a class="btn btn-warning" href="./index.php?a=modifier&id=<?=$page->id?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Modifier</a>
            <a class="btn btn-danger" href="./index.php?a=delete&id=<?=$page->id?>"><span class="glyphicon glyphicon-trash"></span>&nbsp;Supprimer</a>
        </td>
    </tr>
<?php endforeach;?>
</table>
</div>
</body>
</html>