<?php

if (isset($_GET['callPage'])) {

  switch ($_GET['callPage']) {
      case "home":
          require_once("./controller/controllerChapter.php");
          $chemin = "./view/viewPageHome.php";
          listSmallChapter($chemin);
          break;
      case "chapterOneChapter":
          require_once("./controller/controllerChapter.php");
          $_GET['action'] = "fullChapter";
          $chemin = "./view/viewPageChapter.php";
          chapter($chemin);
          break;
      case "chapterListSmallChapter":
          require_once("./controller/controllerChapter.php");
          $_GET['action'] = "listSmallChapter";
          $chemin = "./view/viewPageChapter.php";
          listSmallChapter($chemin);
          break;
      case "about":
          require_once("./view/viewPageAbout.php");
          break;
      case "contact":
          require_once("./view/viewPageContact.php");
          break;
      case "login":
          require_once("./view/viewPageLogin.php");
          break;
      case "cgu":
          require_once("./view/viewPageCGU.php");
          break;
      case "dashboardListLineChapter":
          require_once("./controller/controllerChapter.php");
          $_GET['action'] = "listLineChapter";
          $chemin = "./view/viewPageDashboard.php";
          listSmallChapter($chemin);
          break;
      case "dashboardDisplayOneChapter":
          require_once("./controller/controllerChapter.php");
          $_GET['action'] = "displayOneChapter";
          $chemin = "./view/viewPageDashboard.php";
          chapter($chemin);
          break;
      case "dashboardEditChapter":
          $_GET['action'] = "editChapter";
          require_once("./view/viewPageDashboard.php");
          break;
      case "dashboardListLineComment":
          require_once("./controller/controllerComment.php");
          $_GET['action'] = "listLineComment";
          $chemin = "./view/viewPageDashboard.php";
          listCommentState0($chemin);
          break;
  }
}
else {
    require_once("./controller/controllerChapter.php");
    $chemin = "./view/viewPageHome.php";
    listSmallChapter($chemin);
}
