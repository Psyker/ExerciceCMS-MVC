<?php include 'layout/base.php'?>
<div class="container theme-showcase" role="main">
    <div class="jumbotron">
        <h1><?=$page->h1?></h1>
        <p><?=$page->body?></p>
        <span class="label <?=$page->span_class?>"><?= $page->span_text ?></span>
    </div>
    <img class="img-thumbnail" src="<?= $page->img ?>" data-holder-rendered="true">
</div>
</body>
</html>