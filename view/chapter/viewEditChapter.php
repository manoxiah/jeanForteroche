


<form action="./index.php?callPage=sendNewChapter" method="post">
    <div class="form-group">
        <input type="text" class="form-control" id="numberChapter" name="numberChapter" placeholder="Numéro de chapitre" required >
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="titleChapter" name="titleChapter" placeholder="Titre" required >
    </div>
    <div class="form-group">
        <textarea class="form-control" type="textarea" id="textareaEditChapter" name="contentChapter" placeholder="Chapitre" rows="15" ></textarea>
        <h6>Remplissez tous les champs</h6>
    </div>
    <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Valider</button>
</form>