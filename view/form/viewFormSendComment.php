
<form action="SendComment.php?id_chapitre=' . $donneesChapter['id'] . '" method="post" class="col-lg-6">
  <h4>Laisser un commentaire</h4>
    <div class="form-group">
     <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required >
    </div>
    <div class="form-group">
     <textarea class="form-control" type="textarea" name="commentaire" id="commentaire" placeholder="Commentaire" rows="7" required ></textarea>
     <h6>Remplissez tous les champs</h6>
    </div><br/>
  <button type="submit" id="submit" name="submit" class="col-lg-2 btn btn-primary pull-right">Valider</button><br/><br/><br/><br/><br/><br/>
</form>
