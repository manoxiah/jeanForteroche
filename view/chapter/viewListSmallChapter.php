
  <div class="principalTitleSection"><strong>-- Les chapitres --</strong></div><br/><br/><br/>
    <?php
    $resultat ="";
    while ($donneesReqListSmallChapter = $donneesListSmallChapter->fetch())
      {
      $contentChapitre = substr($donneesReqListSmallChapter['chapter'], 0, 500);
      $publicationDateFr = date("d/m/Y", strtotime($donneesReqListSmallChapter['publicationDate']));

      $resultat .='<div class="chapterViewListSmallChapter" title="Cliquez ici pour lire le '. $donneesReqListSmallChapter['numberChapter'] .' complet.">
      <h3><strong><a href="/Projet_3/index.php?callPage=chapterOneChapter&numberChapter='. $donneesReqListSmallChapter['id'] .'">'. $donneesReqListSmallChapter['numberChapter'] .'</a></strong></h3>
      <h4><em><strong>'.$donneesReqListSmallChapter['titleChapter'].'</strong></em></h4>
      <br/><br/><div class="contentChapter">'. $contentChapitre .'</div><br/>
      <br/><em class="autor">Publié par Jean Forteroche le ' . $publicationDateFr . '</em></div>';
      }
      echo '<div>'. $resultat .'</div>';

    $donneesListSmallChapter->closeCursor();
