<?php
ob_start(); ?>
    <div class="col-lg-12 sectionChapter"><br/><br/><br/>
    <div class="principalTitleSection"><strong>-- Les chapitres --</strong></div><br/><br/><br/>
  <?php
    $titlePage = "Jean vous propose sa liste de chapitres";
      foreach ($displayListChapterPageChapter as $donneesDisplayListChapterPageChapter)
      {
          $contentChapter = substr($donneesDisplayListChapterPageChapter['chapter'], 0, 500);
          $publicationDateFr = date("d/m/Y", strtotime($donneesDisplayListChapterPageChapter['publicationDate']));
    ?>
          <div class="chapterViewListSmallChapter" title="Cliquez ici pour lire le <?= $donneesDisplayListChapterPageChapter['numberChapter']?> complet.">
          <h3><strong>
                  <a href="./index.php?callPage=chapterDisplayOneChapter&idChapter=<?= $donneesDisplayListChapterPageChapter['id'] ?>&colorButtonNavChapter=0"><?= $donneesDisplayListChapterPageChapter['numberChapter'] ?></a>
              </strong></h3>
          <h4><em><strong><?=$donneesDisplayListChapterPageChapter['titleChapter'] ?></strong></em></h4>
          <br/><br/><div class="contentChapter"><?= $contentChapter ?></div><br/>
          <br/><em class="autor">Publié par Jean Forteroche le <?= $publicationDateFr ?></em></div>

  <?php
      }
      ?><br/> <?php
$content = ob_get_clean(); ?>

<?php require_once('./view/template/viewTemplateHtml.php');
