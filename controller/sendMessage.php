<?php

  $req = $bdd_projet_3->prepare('INSERT INTO message_formulaire_contact( nom,email,message,date) VALUES(?,?,?,?)');
  $req->execute(array($_POST['name'],$_POST['email'],$_POST['message'],$datetime));

  header("Location: viewPageContact.php" );
