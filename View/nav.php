<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php foreach($data as $content):  ?>
                <li><a href="?route=<?=$content->slug?>"><?=$content->slug ?></a></li>
                <?
                endforeach;
                ?>
            </ul>
        </div>
    </div>
</nav>