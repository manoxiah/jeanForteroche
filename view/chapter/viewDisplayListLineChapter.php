<ul class="col-lg-12">
    <?php

         foreach ($displayListLineChapterPageDashboard as $donneesDisplayListLineChapterPageDashboard)
      { 
          $contentChapter = substr($donneesDisplayListLineChapterPageDashboard['chapter'], 0, 100);
          $dateFr = date("d/m/Y", strtotime($donneesDisplayListLineChapterPageDashboard['publicationDate']));
  ?>
    <li class="listChapter">
      <a href="./index.php?callPage=dashboardDisplayOneChapter&stateChapter=<?= $_GET['stateChapter'] ?>&idChapter=<?= $donneesDisplayListLineChapterPageDashboard['id'] ?>&colorButtonNavDashboard=0">
      <span class="date col-lg-1"><?= $dateFr ?></span>
      <span class="date col-lg-2"><?= $donneesDisplayListLineChapterPageDashboard['nameBook'] ?></span>
      <span class="col-lg-1"><strong><?= $donneesDisplayListLineChapterPageDashboard['numberChapter'] ?></strong></span>
      <span><?= $contentChapter ?></span>
      </a></li>

  <?php 
      } 
?>
</ul>