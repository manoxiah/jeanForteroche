<ul class="col-lg-12">
    <?php
    $resultat_chapitre ="";

    while ($donneesReqListSmallChapter = $donneesListSmallChapter->fetch())
    {

    $contentChapter = substr($donneesReqListSmallChapter['chapter'], 0, 100);
    $dateFr = date("d/m/Y", strtotime($donneesReqListSmallChapter['publicationDate']));

    $resultat_chapitre .='<li class="listChapter">
      <a href="/Projet_3/index.php?callPage=dashboardDisplayOneChapter&numberChapter='. $donneesReqListSmallChapter['id'] .'">
      <span class="date col-lg-1">'. $dateFr .'</span>
      <span class="date col-lg-2">'. $donneesReqListSmallChapter['nameBook'] .'</span>
      <span class="col-lg-1"><strong>'. $donneesReqListSmallChapter['numberChapter'] .'</strong></span>
      <span>'. $contentChapter .'</span>
      </a></li>';
    }
    echo $resultat_chapitre . '<br/>';
    ?>
</ul>