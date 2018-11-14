
  <ul class="col-lg-12">
      <?php
      
      foreach ($displayListLineMessage as $donneesDisplayListLineMessage)
      {
          $contentMessage = substr($donneesDisplayListLineMessage['contentMessage'], 0, 50);
          $dateFr = date("d/m/Y", strtotime($donneesDisplayListLineMessage['publicationDate']));
          $heure = date("h", strtotime($donneesDisplayListLineMessage['publicationDate']));
          $minute = date("m", strtotime($donneesDisplayListLineMessage['publicationDate']));

?>
          <li class="listMessageContact">
          <a href="./index.php?callPage=dashboardDisplayOneMessage&stateMessage=<?= $_GET['stateMessage'] ?>&idMessage=<?= $donneesDisplayListLineMessage['id'] ?>">
          <span class="date col-lg-2"><?= $dateFr ?> à <?= $heure ?>:<?= $minute ?></span>
          <span class="col-lg-2"><strong><?= $donneesDisplayListLineMessage['name'] ?></strong></span>
          <span class="date col-lg-2"><?= $donneesDisplayListLineMessage['email'] ?></span>
          <span><?= $contentMessage ?></span>
          </a></li>
<?php
      }
        ?>
  </ul>