
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Details de la page : <?=$title?></title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Back Office</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php?a=lister">Pages</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">
    <h1>Ajouter une nouvelle page</h1>
    <form method="post" class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Titre (navigation)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="<?=$data->title?>" placeholder="Titre">
            </div>
        </div>
        <div class="form-group">
            <label for="h1" class="col-sm-2 control-label">Titre de la page</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="h1" name="h1" value="<?=$data->h1 ?>" placeholder="Titre de la page">
            </div>
        </div>

        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea  class="form-control" id="body" name="body" placeholder="Description"><?=$data->body ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="span_class" class="col-sm-2 control-label">Classe du span</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="span_class" value="<?=$data->span_class ?>" name="span_class" placeholder="Classe du span">
            </div>
        </div>

        <div class="form-group">
            <label for="span_text" class="col-sm-2 control-label">Texte du span</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="span_text" value="<?=$data->span_text ?>" name="span_text" placeholder="Texte du span">
            </div>
        </div>

        <div class="form-group">
            <label for="img" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="img" value="<?=$data->img?>" name="img" placeholder="URL de l'image">
            </div>
        </div>

        <div class="form-group">
            <label for="img" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" value="<?=$data->slug?>" placeholder="Slug de la page">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Enregistrer</button>
            </div>
        </div>
    </form>

</div>
</body>
</html>