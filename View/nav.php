<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach($nav as $page):  ?>
                <li class="<?=isActive($page->slug, $slug)?>"><a href="index.php?route=<?=$page->slug?>"><?=$page->title?></a></li>
                <?php
                endforeach;
                ?>
                <li class=""><a href="./admin/index.php?a=lister">Administration</a></li>
            </ul>
        </div>
    </div>
</nav>