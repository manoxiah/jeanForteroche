<?php

require_once("./model/modelChapter.php");

function listSmallChapter($chemin)
{
    $objetListSmallChapter = new chapter();
    $donneesListSmallChapter = $objetListSmallChapter->getListSmallChapter();

    require_once($chemin);
}

function chapter($chemin)
{
    $objetChapter = new chapter();
    $donneesChapter = $objetChapter->getchapter($_GET['numberChapter']);

    require_once($chemin);
}