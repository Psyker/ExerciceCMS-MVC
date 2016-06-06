<?php
    if($data !== false){
        $title = $data->title;
    } else {
        $title = "Oops I did it again";
    }
?>

<div class="container theme-showcase" role="main">
    <h1>Pages</h1>
    <?php if($data !== false):?>
        <p>
            <span class="">ID</span><br/>
            <?=$data->id?>
        </p>
        <p>
            <span class="">Title</span><br/>
            <?=$data->title?>
        </p>
        <p>
            <span class="">Slug</span><br/>
            <?=$data->slug?>
        </p>
        <p>
            <span class="">Body</span><br/>
        <pre><?=htmlentities($data->body)?></pre>
        </p>
    <?php else: ?>
        <p>
            ID fournie non trouv&eacute;e
        </p>
    <?php endif; ?>

</div>
</body>
</html>