<?php

  if ((isset($_GET['validate'])) and ($_GET['validate'] == 'validate')) {
    $req = $bdd_projet_3->prepare('UPDATE commentaire_chapitre SET signaler_valider_bloquer = :a WHERE id = :b');
    $req->execute(array('a' => 2,'b' => $_GET['id_commentaire']));

    header('Location: viewDashboard.php');

  }
  else if ((isset($_GET['block'])) and ($_GET['block'] == 'block')) {
    $req = $bdd_projet_3->prepare('UPDATE commentaire_chapitre SET signaler_valider_bloquer = :a WHERE id = :b');
    $req->execute(array('a' => 3,'b' => $_GET['id_commentaire']));

    header('Location: viewDashboard.php');
  }
