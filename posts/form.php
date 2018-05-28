<form id="fromNewPost" class="form-horizontal" method="post"
    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <!-- TITLE -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="title">Cím:</label>
        <div class="col-sm-8">
            <input type="text" name="title" class="form-control"
                placeholder="Add meg a bejegyzés címét..." autofocus required pattern=".*\S.*"
                value="<?php echoIfSet($title) ?>">
        </div>
    </div>

    <!-- TEASER -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="teaser">Figyelemfelkeltő:</label>
        <div class="col-sm-8">
            <textarea type="text" name="teaser" rows="2" class="form-control" required
                placeholder="Írj egy rövid figyelemfelkeltő szöveget..."><?php echoIfSet($teaser) ?></textarea>
        </div>
    </div>

    <!-- BODY -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="body">Bejegyzés tartalma:</label>
        <div class="col-sm-8">
            <textarea type="text" name="body" rows="6" class="form-control" required
                placeholder="Írd meg a bejegyzést..."><?php echoIfSet($body) ?></textarea>
        </div>
    </div>

    <!-- AUTHOR -->
    <div class="form-group">
        <label class="control-label col-sm-2" for="author">Szerző:</label>
        <div class="col-sm-8">
            <input type="text" name="author" class="form-control"
                placeholder="Add meg a neved..." autofocus required pattern=".*\S.*"
                value="<?php echoIfSet($author) ?>">
        </div>
    </div>

    <!-- GOMB -->
    <div class="form-group text-center">
        <button id="btnNewPost" type="submit" name="submit" value="1" formmethod="post" class="btn btn-primary">Mentés</button>
    </div>

    <!-- ELLENŐRZŐ SCRIPT -->
    <script type="text/javascript" src="../static/js/verify_post.js"></script>
</form>