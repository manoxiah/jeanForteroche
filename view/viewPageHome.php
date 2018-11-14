<?php
$titlePage = "Jean FORTEROCHE vous accueille";
ob_start();

    require_once('./view/frontend/picture/viewPictureMountain.php');
    ?>
  <div class="col-lg-12 sectionHome">
    <?php
        require_once('./view/frontend/general/viewContentPreface.php');
    ?>
  <div class="col-lg-4 sectionChapter">
    <div class="principalTitleSection"><strong>-- Les chapitres --</strong></div>
      <div class="listChapterViewHome">
          <?php
          foreach ($displayListChapterPageHome as $donneesListChapterHome)
          { ?>

          <div class="ChapterViewHome" title="Cliquez ici pour lire le <?= $donneesListChapterHome['numberChapter'] ?> complet.">
              <h3>
                  <strong><a href="./index.php?callPage=chapterDisplayOneChapter&idChapter=<?= $donneesListChapterHome['id'] ?>"><?= $donneesListChapterHome['numberChapter'] ?></a></strong>
              </h3>
              <h4><em><strong><?= $donneesListChapterHome['titleChapter'] ?></strong></em></h4></div>
          <?php } ?>
      </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require_once('./view/template/viewTemplateHtml.php');