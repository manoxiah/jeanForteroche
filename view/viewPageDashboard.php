<?php
$titlePage = "Votre tableau de bord";
ob_start(); ?>

    <div class="col-lg-12 sectionDashboard">

      <div class="col-lg-12 principalTitleSection"><strong>-- Tableau de bord --</strong></div>
      <div class="col-lg-2 sectionMenu">
        <h4><strong>-- Les chapitres</strong></h4>
        <ul class="col-lg-12 sectionMenuChapter">
            <a href="./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1">
                <li class="menuDashboard <?php if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 1 )) { echo "colorMenu"; } else { echo""; } ?>">Les publiés</li></a>
            <a href="./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0">
                <li class="menuDashboard <?php if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 0 )) { echo "colorMenu"; } else { echo""; } ?>">En écriture</li></a>
            <a href="./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=2">
                <li class="menuDashboard <?php if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 2 )) { echo "colorMenu"; } else { echo""; } ?>">Les archivés</li></a>
            <a href="./index.php?callPage=dashboardDisplayEditChapter">
                <li class="menuDashboard <?php if ((isset($_GET['editChapter'])) and ($_GET['editChapter'] == '1')) { echo "colorMenu"; } else { echo""; } ?>">Nouveau chapitres</li></a>
        </ul>
        <h4><strong>-- Les commentaires</strong></h4>
        <ul class="col-lg-12 sectionMenuComment">
          <a href="./index.php?callPage=dashboardDisplayListLineComment&stateComment=0">
            <li class="menuDashboard <?php if ((isset($_GET['stateComment'])) and ($_GET['stateComment'] == 0 )) { echo "colorMenu"; } else { echo""; } ?>">Les non lus</li></a>
          <a href="./index.php?callPage=dashboardDisplayListLineComment&stateComment=1">
            <li class="menuDashboard <?php if ((isset($_GET['stateComment'])) and ($_GET['stateComment'] == 1 )) { echo "colorMenu"; } else { echo""; } ?>">Les signalés</li></a>
          <a href="./index.php?callPage=dashboardDisplayListLineComment&stateComment=2">
            <li class="menuDashboard <?php if ((isset($_GET['stateComment'])) and ($_GET['stateComment'] == 2 )) { echo "colorMenu"; } else { echo""; } ?>">Les validés</li></a>
          <a href="./index.php?callPage=dashboardDisplayListLineComment&stateComment=3">
            <li class="menuDashboard <?php if ((isset($_GET['stateComment'])) and ($_GET['stateComment'] == 3 )) { echo "colorMenu"; } else { echo""; } ?>">Les bloqués</li></a>
        </ul>
        <h4><strong>-- Les messages</strong></h4>
        <ul class="col-lg-12 sectionMenuMessage">
            <a href="./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0">
                <li class="menuDashboard <?php if ((isset($_GET['stateMessage'])) and ($_GET['stateMessage'] == 0 )) { echo "colorMenu"; } else { echo""; } ?>">Les non lus</li></a>
            <a href="./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=1">
                <li class="menuDashboard <?php if ((isset($_GET['stateMessage'])) and ($_GET['stateMessage'] == 1 )) { echo "colorMenu"; } else { echo""; } ?>">les lus</li></a>
            <a href="./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=2">
                <li class="menuDashboard <?php if ((isset($_GET['stateMessage'])) and ($_GET['stateMessage'] == 2 )) { echo "colorMenu"; } else { echo""; } ?>">Avec réponse</li></a>
        </ul>
      </div>
      <div class="col-lg-10 sectionDetail">
<?php

    if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayListLineChapter')) {
        $titlePage = "Tableau de bord";
        require_once("./view/chapter/viewDisplayListLineChapter.php");
    }
    else if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayOneChapter')) {
        $titlePage = "Tableau de bord";
        require_once("./view/chapter/viewDisplayOneChapter.php");
    }
    else if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayEditChapter')) {
        $titlePage = "Tableau de bord";
        require_once("./view/chapter/viewEditChapter.php");
    }
    else if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayListLineComment')) {
        $titlePage = "Tableau de bord";
        require_once("./view/comment/viewDisplayListLineCommentState.php");
    }
    else if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayOneComment')) {
        $titlePage = "Tableau de bord";
        require_once("./view/comment/viewDisplayOneComment.php");
    }
    else if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayListLineMessage')) {
        $titlePage = "Tableau de bord";
        require_once("./view/message/viewDisplayListLineMessageState.php");
    }
    else if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayOneMessage')) {
        $titlePage = "Tableau de bord";
        require_once("./view/message/viewDisplayOneMessage.php");
    }
?>
      </div>
    </div>
<?php
$content = ob_get_clean();

require_once('./view/template/viewTemplateHtml.php'); ?>

      <script>
      tinymce.init({
        selector: '#textareaEditChapter'
      });
      </script>

