<?php

    $resultat ="";
    $publicationDateFr = date("d/m/Y", strtotime($donneesChapter['publicationDate']));

    $resultat .='<div class="chapterViewFullChapter">
    <div class="principalTitleSection"><strong>-- '. $donneesChapter['numberChapter'] .' --</strong></div><br/>
    <h4><em><strong>'. $donneesChapter['titleChapter'] .'</strong></em></h4>
    <br/><br/><div class="contentChapter">'. $donneesChapter['chapter'] .'</div><br/>
    <br/><em class="autor">Publié par Jean Forteroche le ' . $publicationDateFr . '</em></div><br/><br/>';
    $resultat .='<div class="col-lg-12"><br/><br/>';

    echo $resultat;
