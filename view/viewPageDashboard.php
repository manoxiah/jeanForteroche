<?php
$titlePage = "Votre tableau de bord";
ob_start(); ?>

    <div class="col-lg-12 sectionDashboard">

      <div class="col-lg-12 principalTitleSection"><strong>-- Tableau de bord --</strong></div>
      <div class="col-lg-2 sectionMenu">
        <h4><strong>-- Les chapitres</strong></h4>
        <ul class="col-lg-12 sectionMenuChapter">
          <a href="./index.php?callPage=dashboardListLineChapter">
            <li class="menuDashboard <?php if(((isset($_GET['listChapter'])) and ($_GET['listChapter'] == 'listChapter')) or ((isset($_GET['chapter'])) and ($_GET['chapter'] == 'chapter'))) { echo "colorMenu"; } else { echo""; } ?>">Les chapitres</li></a>
          <a href="./index.php?callPage=dashboardEditChapter">
            <li class="menuDashboard <?php if((isset($_GET['editChapter'])) and ($_GET['editChapter'] == 'editChapter')) { echo "colorMenu"; } else { echo""; } ?>">Nouveau chapitres</li></a>
        </ul>
        <h4><strong>-- Les commentaires</strong></h4>
        <ul class="col-lg-12 sectionMenuComment">
          <a href="./index.php?callPage=dashboardListLineComment">
            <li class="menuDashboard <?php if(((isset($_GET['listComment'])) and ($_GET['listComment'] == 'listComment')) or ((isset($_GET['comment'])) and ($_GET['comment'] == 'comment'))) { echo "colorMenu"; } else { echo""; } ?>">Tous</li></a>
          <a href="./index.php?callPage=dashboard&listReportComment=listReportComment">
            <li class="menuDashboard <?php if(((isset($_GET['listReportComment'])) and ($_GET['listReportComment'] == 'listReportComment')) or ((isset($_GET['reportComment'])) and ($_GET['reportComment'] == 'reportComment'))) { echo "colorMenu"; } else { echo""; } ?>">Les signalés</li></a>
          <a href="./index.php?callPage=dashboard&listValidateComment=listValidateComment">
            <li class="menuDashboard <?php if(((isset($_GET['listValidateComment'])) and ($_GET['listValidateComment'] == 'listValidateComment')) or ((isset($_GET['validateComment'])) and ($_GET['validateComment'] == 'validateComment'))) { echo "colorMenu"; } else { echo""; } ?>">Les validés</li></a>
          <a href="./index.php?callPage=dashboard&listBlockComment=listBlockComment">
            <li class="menuDashboard <?php if(((isset($_GET['listBlockComment'])) and ($_GET['listBlockComment'] == 'listBlockComment')) or ((isset($_GET['blockComment'])) and ($_GET['blockComment'] == 'blockComment'))) { echo "colorMenu"; } else { echo""; } ?>">Les bloqués</li></a>
        </ul>
        <h4><strong>-- Les messages</strong></h4>
        <ul class="col-lg-12 sectionMenuMessage">
          <a href="./index.php?callPage=dashboard&listMessageContact=listMessageContact">
            <li class="menuDashboard <?php if(((isset($_GET['listMessageContact'])) and ($_GET['listMessageContact'] == 'listMessageContact')) or ((isset($_GET['messageContact'])) and ($_GET['messageContact'] == 'messageContact'))) { echo "colorMenu"; } else { echo""; } ?>">Les messages</li></a>
        </ul>
      </div>
      <div class="col-lg-10 sectionDetail">
<?php

    if ((isset($_GET['action'])) and ($_GET['action'] == 'listLineChapter')) {
        $titlePage = "Tableau de bord";
        require_once("./view/chapter/viewListLineChapter.php");
    }
    else if ((isset($_GET['action'])) and ($_GET['action'] == 'displayOneChapter')) {
        $titlePage = "Tableau de bord";
        require_once("./view/chapter/viewDisplayOneChapter.php");
    }
    else if ((isset($_GET['action'])) and ($_GET['action'] == 'editChapter')) {
        $titlePage = "Tableau de bord";
        require_once("./view/chapter/viewEditChapter.php");
    }
    else if ((isset($_GET['action'])) and ($_GET['action'] == 'listLineComment')) {
        $titlePage = "Tableau de bord";
        require_once("./view/comment/viewListLineComment.php");
    }
?>
      </div>
    </div>
<?php
$content = ob_get_clean();

require_once('templateHTML.php'); ?>

    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
      <script>
      tinymce.init({
        selector: '#textareaEditChapter'
      });
      </script>

