<ul class="col-lg-12">
    <?php

    $resultat_commentaire ="";

    while ($donneesReqListCommentState0 = $donneesListCommentState0->fetch())
    {
    $contentComment = substr($donneesReqListCommentState0['commentaire'], 0, 100);
    $dateFr = date("d/m/Y", strtotime($donneesReqListCommentState0['publicationDate']));
    $heure = date("h", strtotime($donneesReqListCommentState0['publicationDate']));
    $minute = date("m", strtotime($donneesReqListCommentState0['publicationDate']));

    $resultat_commentaire .='<li class="listComment">
        <a href="viewDashboard.php?comment=comment&numberComment='. $donneesReqListCommentState0['id'] .'">
        <span class="date col-lg-2">'. $dateFr .' à ' . $heure .':' . $minute . '</span>
        <span class="col-lg-2"><strong>'. $donneesReqListCommentState0['pseudo'] .'</strong></span>
        <span>'. $contentComment .'</span>
        </a></li>';
    }
    echo $resultat_commentaire;
    ?>
</ul>