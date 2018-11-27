<ul class="col-lg-12">
    <?php

    foreach ($displayListLineCommentByStateComment as $donneesDisplayListLineCommentByStateComment)
    {
    $contentComment = substr($donneesDisplayListLineCommentByStateComment['contentComment'], 0, 100);
    $dateFr = date("d/m/Y", strtotime($donneesDisplayListLineCommentByStateComment['publicationDate']));
    $heure = date("h", strtotime($donneesDisplayListLineCommentByStateComment['publicationDate']));
    $minute = date("m", strtotime($donneesDisplayListLineCommentByStateComment['publicationDate']));
    ?>
        <li class="listComment">
        <a href="./index.php?callPage=dashboardDisplayOneComment&stateComment=<?= $_GET['stateComment'] ?>&idComment=<?= $donneesDisplayListLineCommentByStateComment['id'] ?>">
        <span class="date col-lg-2"><?= $dateFr ?> à <?= $heure ?>:<?= $minute ?></span>
        <span class="col-lg-2"><strong><?= $donneesDisplayListLineCommentByStateComment['pseudo'] ?></strong></span>
        <span><?= $contentComment ?></span>
        </a></li>
<?php
    }
?>

</ul>

<?php
    if ($countCommentByStateComment == 1)
    {
         ?>
        <div class="col-lg-12 alertGeneric backgroundColorAlertInvalid">
            <strong class="numberUnreadComment" ><?= $countCommentByStateComment ?></strong>
            <em >commentaire plus récent est en fille d'attente, il vous faut traiter ceux qui sont en visuel pour y accéder.</em></strong>
        </div>
        <?php
    }
   else if ($countCommentByStateComment > 1)
    {
        ?>
        <div class="col-lg-12 alertGeneric backgroundColorAlertInvalid">
            <strong class="numberUnreadComment" ><?= $countCommentByStateComment ?></strong>
            <em >commentaires plus récent sont en fille d'attente, il vous faut traiter ceux qui sont en visuel pour y accéder.</em></strong>
        </div>
        <?php
    }
    else { return false;}
?>

