<?php

    $resultat_commentaire ="";
    $resultat_commentaire .="</div><div class=\"principalTitleSection\"><strong>-- Les commentaires --</strong></div><br/>";

  while ($donneesReqListComment = $donneesListFullComment->fetch())
    {
    $publicationDateFr = date("d/m/Y", strtotime($donneesReqListComment['publicationDate']));

      if ($donneesReqListComment['signaler_valider_bloquer']  == 0) {
        $resultat_commentaire .='<div class="col-lg-12 sectionComment">
        <h4><strong>'. $donneesReqListComment['pseudo'] .'</strong></h4>
        <div class="comment">'. $donneesReqListComment['commentaire'] .'</div><br/>
        <form action="SendReportComment.php?id_commentaire='. $donneesReqListComment['id'] .'" method="post">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right col-lg-1">Signaler</button>
        </form><br/>
        <em class="autor">Publié le ' . $publicationDateFr . '</em>
      </div>';
      }
      elseif ($donneesReqListComment['signaler_valider_bloquer'] == 1) {
        $resultat_commentaire .='<div class="col-lg-12 sectionComment">
        <h4><strong>'. $donneesReqListComment['pseudo'] .'</strong></h4>
        <div class="comment">'. $donneesReqListComment['commentaire'] .'</div><br/>
        <em class="autor">Publié le ' . $publicationDateFr . '</em>
        <h6 class="col-lg-2 pull-right" >Ce message est en court de vérification suite à un signalement.</h6>
      </div>';
      }
      elseif ($donneesReqListComment['signaler_valider_bloquer'] == 2) {
        $resultat_commentaire .='<div class="col-lg-12 sectionComment">
        <h4><strong>'. $donneesReqListComment['pseudo'] .'</strong></h4>
        <div class="comment">'. $donneesReqListComment['commentaire'] .'</div><br/>
        <em class="autor">Publié le ' . $publicationDateFr . '</em>
        <h6 class="col-lg-2 pull-right" >Ce message à déjà été signalé, mais a été considéré comme valide à la charte du site par notre service administratif.</h6>
      </div>';
      }
      else { echo""; }
    }
    echo $resultat_commentaire;
    $donneesListFullComment->closeCursor();

