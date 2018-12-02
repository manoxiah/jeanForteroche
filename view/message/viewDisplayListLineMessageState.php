
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


    if ( $numberMessage <= 15) {}
    else
    {
    ?>
      <nav aria-label="Page navigation example">
          <ul class="pagination">
              <?php
              for ($i=1; $i<=$numberPage; $i++)
              {
                  if ($numberCurrentPage == $i)
                  {
                      ?>
                      <li class="page-item active">
                          <a class="page-link active" ><?= $i ?></a>
                      </li>
                      <?php
                  }
                  else
                  {
                      ?>
                      <li class="page-item"><a class="page-link" href="./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=<?= $stateMessage ?>&numberCurrentPage=<?= $i ?>" ><?= $i ?></a></li>
                      <?php
                  }
              }
              ?>
          </ul>
      </nav>
      <?php
      }
      ?>
  </ul>
