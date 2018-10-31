<?php
$titlePage = "Jean FORTEROCHE vous accueille";
ob_start(); ?>

  <div class="col-lg-12 pictureHome">
    <img src="/Projet_3/images/alaska.jpg" class="col-lg-12">
    <h1 class="novelTitle"><strong>Un billet simple pour l'Alaska</strong></h1>
  </div>
  <div class="col-lg-12 sectionHome">
  <div class="col-lg-8 sectionPreface">
    <div class="principalTitleSection"><strong>-- La préface --</strong></div><br/>
      <div class="col-lg-12"><br/><br/>
        <p class="col-lg-8 paragraph">
          Précédemment publié sous le titre : Voyage au bout de la solitude
          Il avait renoncé au rêve américain. Pour vivre une aventure extrême. En 1992, le cadavre d'un jeune homme est découvert dans un bus abandonné en Alaska, au pied du mont Mckinley, loin de tout lieu habité.
          Fils de bonne famille, Chris McCandless aurait dû en toute logique devenir un américain bien tranquille à l'avenir sans surprise. Mais, dès l'obtention de son diplôme universitaire, il décide de partir à l'aventure.
          Après avoir fait don de ses économies à une œuvre humanitaire, il entame son périple sous un nom d'emprunt avec sa vieille voiture, qu'il abandonnera un peu plus tard. Il sillonne le sud des Etats-Unis, subsistant grâce à de menus travaux, avant de réaliser son grand projet: s'installer au cœur de l'Alaska, seul, en communion avec la nature. Mais on ne s'improvise pas trappeur, ni homme des bois...
          Ce parcours dramatique d'un jeune homme qui a voulu vivre jusqu'au bout son impossible idéal est retracé par Jon Krakauer, l'auteur du best-seller tragédie à l'Everest. Livre-culte dans le monde entier, Into the Wild a d'emblée fasciné Sean Penn, qui en a réalisé une adaptation cinématographique applaudie par la critique américaine.
        </P>
      </div>
  </div>
  <div class="col-lg-4 sectionChapter">
    <div class="principalTitleSection"><strong>-- Les chapitres --</strong></div>
      <div class="listChapterViewHome">
        <?php
        $resultat ="";
        while ($donneesReqListSmallChapter = $donneesListSmallChapter->fetch())
          {
          $resultat .='<div class="ChapterViewHome" title="Cliquez ici pour lire le '. $donneesReqListSmallChapter['numberChapter'] .' complet.">
          <h3><strong><a href="./index.php?callPage=chapterOneChapter&numberChapter='. $donneesReqListSmallChapter['id'] .'">'. $donneesReqListSmallChapter['numberChapter'] .'</a></strong></h3>
          <h4><em><strong>'.$donneesReqListSmallChapter['titleChapter'].'</strong></em></h4></div>';
          }
          echo '<div>'. $resultat .'</div><br/><br/>';
          ?>
      </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require_once('templateHTML.php');