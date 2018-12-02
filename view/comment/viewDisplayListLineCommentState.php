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

    <?php

    if ( $numberComment <= 15) {}
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
                <li class="page-item"><a class="page-link" href="./index.php?callPage=dashboardDisplayListLineComment&stateComment=<?= $stateComment ?>&numberCurrentPage=<?= $i ?>" ><?= $i ?></a></li>
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




