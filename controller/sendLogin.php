<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd_projet_3 = new PDO('mysql:host=localhost;dbname=projet_3', 'root', '', $pdo_options);

  $req = $bdd_projet_3->prepare('SELECT * FROM administrateur WHERE email = :a');
  $req->execute(array('a' => $_POST['email']));
  $resultat = $req->fetch();

  if (password_verify($_POST['password'], $resultat['mdp'])) {

    header("Location: /Projet_3/index.php?callPage=dashboardListLineChapter" );
  }
  else {
    header("Location: /Projet_3/index.php?callPage=login" );
  }
