

















<?php
else if ((isset($_GET['listComment'])) and ($_GET['listComment'] == 'listComment')) {

}
else if ((isset($_GET['comment'])) and ($_GET['comment'] == 'comment')) {

    $req = $bdd_projet_3->prepare('SELECT * FROM commentaire_chapitre WHERE id=:a');
    $req->execute(array('a'=>$_GET['numberComment']));
    $donnees_req = $req->fetch();
    $resultat_commentaire ="";

      $id_commentaire = $donnees_req['id'];
      $commentaire = $donnees_req['commentaire'];
      $pseudo = $donnees_req['pseudo'];
      $date_de_publication = $donnees_req['date_de_publication'];
      $date = date("d/m/Y", strtotime($date_de_publication));
      $resultat_commentaire .='
      <div class="col-lg-12 sectionComment"><h4><strong>'. $pseudo .'</strong></h4>
      <div class="comment">'. $commentaire .'</div>
      <em class="autor">Publié le ' . $date . '</em><br/><br/>
      <form action="sendValidateBlockComment.php?validate=validate&id_commentaire='. $id_commentaire .'" method="post">
        <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Valider</button>
      </form>
      <form action="sendValidateBlockComment.php?block=block&id_commentaire='. $id_commentaire .'" method="post">
        <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1 pull-right">Bloquer</button>
      </form>
      </div>';

      echo $resultat_commentaire;
}
else if ((isset($_GET['listReportComment'])) and ($_GET['listReportComment'] == 'listReportComment')) {
  ?>
  <ul class="col-lg-12">
    <?php
    $req = $bdd_projet_3->query('SELECT * FROM commentaire_chapitre WHERE signaler_valider_bloquer=1 ORDER BY date_de_publication DESC LIMIT 0,10 ');
    $resultat_commentaire_signale ="";

    while ($donnees_req = $req->fetch())
      {
      $id_commentaire = $donnees_req['id'];
      $pseudo = $donnees_req['pseudo'];
      $date_de_publication = date("d/m/Y", strtotime($donnees_req['date_de_publication']));
      $heure_de_publication = date("h", strtotime($donnees_req['date_de_publication']));
      $minute_de_publication = date("m", strtotime($donnees_req['date_de_publication']));
      $commentaire = substr($donnees_req['commentaire'], 0, 100);
      $resultat_commentaire_signale .='<li class="listReportComment">
      <a href="viewDashboard.php?reportComment=reportComment&numberComment='. $id_commentaire .'">
      <span class="date col-lg-2">'. $date_de_publication .' à ' . $heure_de_publication .':' . $minute_de_publication . '</span>
      <span class="col-lg-2"><strong>'. $pseudo .'</strong></span>
      <span>'. $commentaire .'</span>
      </a></li>';
      }
      echo $resultat_commentaire_signale . '<br/>';
    ?>
  </ul>
  <?php
}
else if ((isset($_GET['reportComment'])) and ($_GET['reportComment'] == 'reportComment')) {

  $req = $bdd_projet_3->prepare('SELECT * FROM commentaire_chapitre WHERE id=:a');
  $req->execute(array('a'=>$_GET['numberComment']));
  $donnees_req = $req->fetch();
  $resultat_commentaire ="";

    $id_commentaire = $donnees_req['id'];
    $commentaire = $donnees_req['commentaire'];
    $pseudo = $donnees_req['pseudo'];
    $date_de_publication = $donnees_req['date_de_publication'];
    $date = date("d/m/Y", strtotime($date_de_publication));
    $resultat_commentaire .='
    <div class="col-lg-12 sectionComment"><h4><strong>'. $pseudo .'</strong></h4>
    <div class="comment">'. $commentaire .'</div>
    <em class="autor">Publié le ' . $date . '</em><br/><br/>
    <form action="sendValidateBlockComment.php?validate=validate&id_commentaire='. $id_commentaire .'" method="post">
      <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Valider</button>
    </form>
    <form action="sendValidateBlockComment.php?block=block&id_commentaire='. $id_commentaire .'" method="post">
      <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1 pull-right">Bloquer</button>
    </form>
    </div>';

    echo $resultat_commentaire;
}
else if ((isset($_GET['listValidateComment'])) and ($_GET['listValidateComment'] == 'listValidateComment')) {
  ?>
  <ul class="col-lg-12">
    <?php
    $req = $bdd_projet_3->query('SELECT * FROM commentaire_chapitre WHERE signaler_valider_bloquer=2 ORDER BY date_de_publication DESC LIMIT 0,10 ');
    $resultat_commentaire_signale ="";

    while ($donnees_req = $req->fetch())
      {
      $id_commentaire = $donnees_req['id'];
      $pseudo = $donnees_req['pseudo'];
      $date_de_publication = date("d/m/Y", strtotime($donnees_req['date_de_publication']));
      $heure_de_publication = date("h", strtotime($donnees_req['date_de_publication']));
      $minute_de_publication = date("m", strtotime($donnees_req['date_de_publication']));
      $commentaire = substr($donnees_req['commentaire'], 0, 100);
      $resultat_commentaire_signale .='<li class="listValidateComment">
      <a href="viewDashboard.php?validateComment=validateComment&numberComment='. $id_commentaire .'">
      <span class="date col-lg-2">'. $date_de_publication .' à ' . $heure_de_publication .':' . $minute_de_publication . '</span>
      <span class="col-lg-2"><strong>'. $pseudo .'</strong></span>
      <span>'. $commentaire .'</span>
      </a></li>';
      }
      echo $resultat_commentaire_signale . '<br/>';
    ?>
  </ul>
  <?php
}
else if ((isset($_GET['validateComment'])) and ($_GET['validateComment'] == 'validateComment')) {

  $req = $bdd_projet_3->prepare('SELECT * FROM commentaire_chapitre WHERE id=:a');
  $req->execute(array('a'=>$_GET['numberComment']));
  $donnees_req = $req->fetch();
  $resultat_commentaire ="";

    $id_commentaire = $donnees_req['id'];
    $commentaire = $donnees_req['commentaire'];
    $pseudo = $donnees_req['pseudo'];
    $date_de_publication = $donnees_req['date_de_publication'];
    $date = date("d/m/Y", strtotime($date_de_publication));
    $resultat_commentaire .='
    <div class="col-lg-12 sectionComment"><h4><strong>'. $pseudo .'</strong></h4>
    <div class="comment">'. $commentaire .'</div>
    <em class="autor">Publié le ' . $date . '</em><br/><br/>
    <form action="sendValidateBlockComment.php?block=block&id_commentaire='. $id_commentaire .'" method="post">
      <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1 pull-right">Bloquer</button>
    </form>
    </div>';

    echo $resultat_commentaire;
}
else if ((isset($_GET['listBlockComment'])) and ($_GET['listBlockComment'] == 'listBlockComment')) {
  ?>
  <ul class="col-lg-12">
    <?php
    $req = $bdd_projet_3->query('SELECT * FROM commentaire_chapitre WHERE signaler_valider_bloquer=3 ORDER BY date_de_publication DESC LIMIT 0,10 ');
    $resultat_commentaire_signale ="";

    while ($donnees_req = $req->fetch())
      {
      $id_commentaire = $donnees_req['id'];
      $pseudo = $donnees_req['pseudo'];
      $date_de_publication = date("d/m/Y", strtotime($donnees_req['date_de_publication']));
      $heure_de_publication = date("h", strtotime($donnees_req['date_de_publication']));
      $minute_de_publication = date("m", strtotime($donnees_req['date_de_publication']));
      $commentaire = substr($donnees_req['commentaire'], 0, 100);
      $resultat_commentaire_signale .='<li class="listBlockComment">
      <a href="viewDashboard.php?blockComment=blockComment&numberComment='. $id_commentaire .'">
      <span class="date col-lg-2">'. $date_de_publication .' à ' . $heure_de_publication .':' . $minute_de_publication . '</span>
      <span class="col-lg-2"><strong>'. $pseudo .'</strong></span>
      <span>'. $commentaire .'</span>
      </a></li>';
      }
      echo $resultat_commentaire_signale . '<br/>';
    ?>
  </ul>
  <?php
}
else if ((isset($_GET['blockComment'])) and ($_GET['blockComment'] == 'blockComment')) {

  $req = $bdd_projet_3->prepare('SELECT * FROM commentaire_chapitre WHERE id=:a');
  $req->execute(array('a'=>$_GET['numberComment']));
  $donnees_req = $req->fetch();
  $resultat_commentaire ="";

    $id_commentaire = $donnees_req['id'];
    $commentaire = $donnees_req['commentaire'];
    $pseudo = $donnees_req['pseudo'];
    $date_de_publication = $donnees_req['date_de_publication'];
    $date = date("d/m/Y", strtotime($date_de_publication));
    $resultat_commentaire .='
    <div class="col-lg-12 sectionComment"><h4><strong>'. $pseudo .'</strong></h4>
    <div class="comment">'. $commentaire .'</div>
    <em class="autor">Publié le ' . $date . '</em><br/><br/>
    <form action="sendValidateBlockComment.php?validate=validate&id_commentaire='. $id_commentaire .'" method="post">
      <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Valider</button>
    </form>
    </div>';

    echo $resultat_commentaire;

}
else if ((isset($_GET['listMessageContact'])) and ($_GET['listMessageContact'] == 'listMessageContact')) {
  ?>
  <ul class="col-lg-12">
    <?php
    $req = $bdd_projet_3->query('SELECT * FROM message_formulaire_contact ORDER BY date DESC');
    $resultat_message ="";

    while ($donnees_req = $req->fetch())
      {
      $id_message = $donnees_req['id'];
      $nom = $donnees_req['nom'];
      $email = $donnees_req['email'];
      $message = substr($donnees_req['message'], 0, 80);
      $date_de_publication = date("d/m/Y", strtotime($donnees_req['date']));
      $heure_de_publication = date("h", strtotime($donnees_req['date']));
      $minute_de_publication = date("m", strtotime($donnees_req['date']));
      $resultat_message .='<li class="listMessageContact">
      <a href="viewDashboard.php?messageContact=messageContact&numberMessage='. $id_message .'">
      <span class="date col-lg-2">'. $date_de_publication .' à ' . $heure_de_publication .':' . $minute_de_publication . '</span>
      <span class="col-lg-2"><strong>'. $nom .'</strong></span>
      <span class="date col-lg-3">'. $email .'</span>
      <span>'. $message .'</span>
      </a></li>';
      }
      echo $resultat_message . '<br/>';
    ?>
  </ul>
  <?php
}
else if ((isset($_GET['messageContact'])) and ($_GET['messageContact'] == 'messageContact')) {

    $req = $bdd_projet_3->prepare('SELECT * FROM message_formulaire_contact WHERE id=:a');
    $req->execute(array('a'=>$_GET['numberMessage']));
    $donnees_req = $req->fetch();
    $resultat_message ="";

    $id_message = $donnees_req['id'];
    $message = $donnees_req['message'];
    $email = $donnees_req['email'];
    $nom = $donnees_req['nom'];
    $date = $donnees_req['date'];
    $date = date("d/m/Y", strtotime($date));
    $resultat_message .='<div class="col-lg-12">
    <h4><strong>'. $email .'</strong></h4>
    <div class="comment">'. $message .'</div>
    <em class="autor">Envoyé par <strong>' . $nom . '</strong> le ' . $date . '</em><br/><br/><br/>
    <form action="sendMail.php?email='. $email .'&id_message='. $id_message .'" method="post">
      <div class="form-group">
       <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" rows="7"></textarea>
      </div><br/>
      <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Répondre</button>
    </form>
    </div>';

    echo $resultat_message ;
}
?>