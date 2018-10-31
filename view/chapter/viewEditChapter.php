<form action="sendChapter.php" method="post" class="col-lg-12">
    <div class="form-group">
        <input type="text" class="form-control" id="numero_chapitre" name="numero_chapitre" placeholder="Numero de chapitre" required >
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="titre_chapitre" name="titre_chapitre" placeholder="Titre" required >
    </div>
    <div class="form-group">
        <textarea class="form-control" type="textarea" name="chapitre" id="textareaEditChapter" placeholder="Chapitre" rows="10" required ></textarea>
        <h6>Remplissez tous les champs</h6>
    </div>
    <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Valider</button><br/><br/><br/><br/><br/><br/>
</form>