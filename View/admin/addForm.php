<div class="container theme-showcase" role="main">
    <h1>Ajouter une nouvelle page</h1>
    <form enctype="multipart/form-data" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Titre (navigation)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Titre">
            </div>
        </div>
        <div class="form-group">
            <label for="h1" class="col-sm-2 control-label">Titre de la page</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="h1" name="h1" placeholder="Titre de la page">
            </div>
        </div>

        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="body" name="body" placeholder="Description">
            </div>
        </div>

        <div class="form-group">
            <label for="span_class" class="col-sm-2 control-label">Classe du span</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="span_class" name="span_class" placeholder="Classe du span">
            </div>
        </div>

        <div class="form-group">
            <label for="span_text" class="col-sm-2 control-label">Texte du span</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="span_text" name="span_text" placeholder="Texte du span">
            </div>
        </div>

        <div class="form-group">
            <label for="img" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="img" name="img" placeholder="URL de l'image">
            </div>
        </div>

        <div class="form-group">
            <label for="img" class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug de la page">
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