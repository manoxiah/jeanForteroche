<?php

  $req = $bdd_projet_3->prepare('INSERT INTO commentaire_chapitre( id_chapitre,commentaire,pseudo,signaler_valider_bloquer,date_de_publication) VALUES(?,?,?,?,?)');
  $req->execute(array($_GET['id_chapitre'],$_POST['commentaire'],$_POST['pseudo'],0,$datetime));

  $id_chapitre = $_GET['id_chapitre'];
  header("Location: viewChapter.php?chapter=chapter&numberChapter=chapitre $id_chapitre" );
