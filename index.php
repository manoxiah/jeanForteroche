<?php
    
require_once("./controller/controllerChapter.php");
require_once("./controller/controllerPageAbout.php");
require_once("./controller/controllerPageContact.php");
require_once("./controller/controllerPageCgu.php");
require_once("./controller/controllerUser.php");
require_once('./controller/controllerComment.php');
require_once('./controller/controllerMessage.php');

if (isset($_GET['callPage']))
{
// test
  switch ($_GET['callPage'])
  {
      case "home":
          $objetControllerChapter = new controllerChapter();
          $objetControllerChapter->displayListChapterPageHome($_GET['stateChapter']);
          break;
      case "chapterDisplayListChapter":
          $objetControllerChapter = new controllerChapter();
          $objetControllerChapter->displayListChapterPageChapter($_GET['stateChapter']);
          break;
      case "chapterDisplayOneChapter":
          $objetControllerChapter = new controllerChapter();
          $objetControllerChapter->displayOneChapterPageChapter($_GET['idChapter']);
          break;
      case "about":
          $objetControllerPageAbout = new controllerPageAbout();
          $objetControllerPageAbout->displayPageAbout();
          break;
      case "contact":
          $objetControllerPageContact = new controllerPageContact();
          $objetControllerPageContact->displayPageContact();
          break;
      case "loginUser":
          $objetControllerPageLoginUser = new controllerLogin();
          $objetControllerPageLoginUser->displayPageLoginUser();
          break;
      case "cgu":
          $objetControllerPageCgu = new controllerPageCgu();
          $objetControllerPageCgu->displayPageCgu();
          break;
      case "dashboardDisplayListLineChapter":
          $objetControllerChapter = new controllerChapter();
          $objetControllerChapter->displayListLineChapterPageDashboard($_GET['stateChapter']);
          break;
      case "dashboardDisplayOneChapter":
          $objetControllerChapter = new controllerChapter();
          $objetControllerChapter->displayOneChapterPageDashboard($_GET['idChapter']);
          break;
      case "dashboardEditChapter":
          require_once("./view/viewPageDashboard.php");
          break;
      case "dashboardDisplayListLineComment":
          $objetControllerComment = new controllerComment();
          $objetControllerComment->displayListLineCommentByStateCommentPageDashboard($_GET['stateComment']);
          break;
      case "dashboardDisplayOneComment":
          $objetControllerComment = new controllerComment();
          $objetControllerComment->displayOneCommentPageDashboard($_GET['idComment']);
          break;
      case "dashboardDisplayListLineMessage":
          $objetControllerMessage = new controllerMessage();
          $objetControllerMessage->displayListLineMessageByStateMessagePageDashboard($_GET['stateMessage']);
          break;
      case "dashboardDisplayOneMessage":
          $objetControllerMessage = new controllerMessage();
          $objetControllerMessage->displayOneMessagePageDashboard($_GET['idMessage']);
          break;
      case "sendLoginUser":
          $objetControllerUser = new controllerLogin();
          $objetControllerUser->connectionUser($_POST['email'],$_POST['password'],$_GET['stateChapter']);
          break;
      case "sendNewChapter":
          $objetcontrollerChapter = new controllerChapter();
          $objetcontrollerChapter->sendNewChapter($_POST['numberChapter'],$_POST['titleChapter'],$_POST['contentChapter']);
          break;
      case "sendCommentChapter":
          $objetControllerComment = new controllerComment();
          $objetControllerComment->sendCommentChapter($_GET['idChapter'],$_POST['contentComment'],$_POST['pseudo']);
          break;
      case "updateCommentChapterPageChapter":
          $objetControllerChapter = new controllerComment();
          $objetControllerChapter->updateCommentChapterPageChapter($_GET['idComment'],$_GET['stateComment'],$_GET['idChapter']);
          break;
      case "updateCommentChapterPageDashboard":
          $objetControllerChapter = new controllerComment();
          $objetControllerChapter->updateCommentChapterPageDashboard($_GET['idComment'],$_GET['stateComment']);
          break;
      case "sendMessageFormContact":
          $objetControllerMessage = new controllerMessage();
          $objetControllerMessage->sendMessageFormContact($_POST['name'],$_POST['email'],$_POST['contentMessage']);
          break;
      case "updateMessage":
          $objetControllerMessage = new controllerMessage();
          $objetControllerMessage->updateMessagePageDashboard($_GET['idMessage'],$_GET['stateMessage']);
          break;
      case "updateStateChapterPageDashboard":
          $objetcontrollerChapter = new controllerChapter();
          $objetcontrollerChapter->updateStateChapterPageDashboard($_GET['idChapter'],$_GET['stateChapter']);
          break;
      case "deleteChapterPageDashboard":
          $objetcontrollerChapter = new controllerChapter();
          $objetcontrollerChapter->deleteChapterPageDashboard($_GET['idChapter']);
          break;
      case "updateChapterPageDashboard":
          $objetcontrollerChapter = new controllerChapter();
          $objetcontrollerChapter->updateChapterPageDashboard($_GET['idChapter'],$_POST['titleChapter'],$_POST['contentChapter']);
          break;
      case "replyMessage":
          $objetControllerMessage = new controllerMessage();
          $objetControllerMessage->replyMessage($_GET['idMessage'],$_GET['email'],$_GET['stateMessage'],$_POST['subject'],$_POST['contentReplyMessage']);
          break;
  }
}
else {
    $objetControllerChapter = new controllerChapter();
    $objetControllerChapter->displayListChapterPageHome(1);
}
