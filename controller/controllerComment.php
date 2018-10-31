<?php

require_once("./model/modelComment.php");

function listFullComment($chemin)
{
    $objetListFullComment = new comment();
    $donneesListFullComment = $objetListFullComment->getListFullComment($_GET['numberChapter']);

    require_once($chemin);
}

function listCommentState0($chemin)
{
    $objetListCommentState0 = new comment();
    $donneesListCommentState0 = $objetListCommentState0->getListCommentState0();

    require_once($chemin);
}
