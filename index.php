<?php
session_start();

require_once("./controller/controllerChapter.php");
require_once("./controller/controllerPageAbout.php");
require_once("./controller/controllerPageContact.php");
require_once("./controller/controllerPageCgu.php");
require_once("./controller/controllerUser.php");
require_once('./controller/controllerComment.php');
require_once('./controller/controllerMessage.php');


$objectControllerChapter = new controllerChapter();
$objectControllerMessage = new controllerMessage();
$objectControllerComment = new controllerComment();
$objectControllerUser = new controllerUser();
$objectControllerPageCgu = new controllerPageCgu();
$objectControllerPageContact = new controllerPageContact();
$objectControllerPageAbout = new controllerPageAbout();


if (isset($_GET['callPage']))
{

  switch ($_GET['callPage'])
  {
      case "home":
          $objectControllerChapter->displayListChapterPageHome($_GET['stateChapter']);
          break;
      case "chapterDisplayListChapter":
          $objectControllerChapter->displayListChapterPageChapter($_GET['stateChapter']);
          break;
      case "chapterDisplayOneChapter":
          $objectControllerChapter->displayOneChapterPageChapter($_GET['idChapter']);
          break;
      case "about":
          $objectControllerPageAbout->displayPageAbout();
          break;
      case "contact":
          $objectControllerPageContact->displayPageContact();
          break;
      case "loginUser":
          $objectControllerUser->displayPageLoginUser();
          break;
      case "cgu":
          $objectControllerPageCgu->displayPageCgu();
          break;
      case "dashboardDisplayListLineChapter":
          $objectControllerChapter->displayListLineChapterPageDashboard($_GET['stateChapter']);
          break;
      case "dashboardDisplayOneChapter":
          $objectControllerChapter->displayOneChapterPageDashboard($_GET['idChapter']);
          break;
      case "dashboardDisplayEditChapter":
          $objectControllerChapter->displayFormEditChapter();
          break;
      case "dashboardDisplayListLineComment":
          $objectControllerComment->displayListLineCommentByStateCommentPageDashboard($_GET['stateComment']);
          break;
      case "dashboardDisplayOneComment":
          $objectControllerComment->displayOneCommentPageDashboard($_GET['idComment']);
          break;
      case "dashboardDisplayListLineMessage":
          $objectControllerMessage->displayListLineMessageByStateMessagePageDashboard($_GET['stateMessage']);
          break;
      case "dashboardDisplayOneMessage":
          $objectControllerMessage->displayOneMessagePageDashboard($_GET['idMessage']);
          break;
      case "sendLoginUser":
          $objectControllerUser->validateLoginUser($_POST['email'],$_POST['password']);
          break;
      case "logoutUser":
          $objectControllerUser->logoutUser();
          break;
      case "sendNewChapter":
          $objectControllerChapter->sendNewChapter($_POST['numberChapter'],$_POST['titleChapter'],$_POST['contentChapter']);
          break;
      case "sendCommentChapter":
          $objectControllerComment->sendCommentChapter($_POST['idChapter'],$_POST['contentComment'],$_POST['pseudo']);
          break;
      case "updateCommentChapterPageChapter":
          $objectControllerComment->updateCommentChapterPageChapter($_POST['idComment'],$_POST['stateComment'],$_POST['idChapter']);
          break;
      case "updateCommentChapterPageDashboard":
          $objectControllerComment->updateCommentChapterPageDashboard($_POST['idComment'],$_POST['stateComment']);
          break;
      case "sendMessageFormContact":
          $objectControllerMessage->sendMessageFormContact($_POST['name'],$_POST['email'],$_POST['contentMessage']);
          break;
      case "updateMessage":
          $objectControllerMessage->updateMessagePageDashboard($_POST['idMessage'],$_POST['stateMessage']);
          break;
      case "updateStateChapterPageDashboard":
          $objectControllerChapter->updateStateChapterPageDashboard($_POST['idChapter'],$_POST['stateChapter']);
          break;
      case "deleteChapterPageDashboard":
          $objectControllerChapter->deleteChapterPageDashboard($_POST['idChapter']);
          break;
      case "updateChapterPageDashboard":
          $objectControllerChapter->updateChapterPageDashboard($_POST['stateChapter'],$_POST['idChapter'],$_POST['titleChapter'],$_POST['contentChapter']);
          break;
      case "replyMessage":
          $objectControllerMessage->replyMessage($_POST['idMessage'],$_POST['email'],$_POST['stateMessage'],$_POST['subject'],$_POST['contentReplyMessage']);
          break;
  }
}
else {
    $objectControllerChapter->displayListChapterPageHome(1);
}
