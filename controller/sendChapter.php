<?php

  $req = $bdd_projet_3->prepare('SELECT * FROM livres WHERE id = :a');
  $req->execute(array('a' => $_POST['liste_livre']));
  $resultat = $req->fetch();

  $req = $bdd_projet_3->prepare('INSERT INTO chapitres( id_livre, nom_du_livre, numero_chapitre, titre_chapitre, chapitre, date_de_publication) VALUES(?,?,?,?,?,?)');
  $req->execute(array($_POST['liste_livre'],$resultat['nom_du_livre'],$_POST['numero_chapitre'],$_POST['titre_chapitre'],$_POST['chapitre'],$datetime));

  header("Location: viewDashboard.php" );
