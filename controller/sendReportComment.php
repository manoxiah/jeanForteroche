<?php

  $req = $bdd_projet_3->prepare('UPDATE commentaire_chapitre SET signaler_valider_bloquer = :a WHERE id = :b');
  $req->execute(array('a' => 1,'b' => $_GET['id_commentaire']));

  header('Location: viewChapter.php?listChapter=listChapter');
