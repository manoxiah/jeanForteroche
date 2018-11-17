<?php

require_once("./view/backOffice/model/modelChapter.php");

class controllerChapter
{
    private $objectModelChapter;
    private $objectControllerComment;

    public function __construct()
    {
        $this->objectModelChapter = new modelChapter();
        $this->objectControllerComment = new controllerComment();
    }





    public function updateChapterPageDashboard($idChapter,$titleChapter,$contentChapter)
    {
        $this->updateChapter($idChapter,$titleChapter,$contentChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
    }
    public function deleteChapterPageDashboard($idChapter)
    {
        $this->deleteChapter($idChapter);
        $this->objectControllerComment->deleteListCommentForOneChapter($idChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
    }

    public function updateStateChapterPageDashboard($idChapter,$stateChapter)
    {
        $this->updateStateChapter($idChapter,$stateChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
    }
    public function sendNewChapter($numberChapter,$titleChapter,$contentChapter)
    {
        $this->objectModelChapter->sendNewChapter($numberChapter,$titleChapter,$contentChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
    }

    public function displayOneChapterPageDashboard($idChapter)
    {
        $displayOneChapterPageChapter = $this->displayOneChapter($idChapter);
        require_once("./view/viewPageDashboard.php");
    }

    public function displayOneChapterPageChapter($idChapter)
    {
        $displayOneChapterPageChapter = $this->displayOneChapter($idChapter);
        $displayListCommentForOneChapterPageChapter = $this->objectControllerComment->displayListCommentForOneChapterPageChapter($_GET['idChapter']);
        require_once("./view/viewPageChapter.php");
    }

    public function displayListLineChapterPageDashboard($stateChapter)
    {
        $displayListLineChapterPageDashboard = $this->displayListChapter($stateChapter);
        require_once("./view/viewPageDashboard.php");
    }

    public function displayListChapterPageChapter($stateChapter)
    {
        $displayListChapterPageChapter = $this->displayListChapter($stateChapter);
        require_once("./view/chapter/viewDisplayListSmallChapter.php");
    }

    public function displayListChapterPageHome($stateChapter)
    {
        $displayListChapterPageHome = $this->displayListChapter($stateChapter);
        $_GET['colorButtonNavHome'] = 0;
        require_once("./view/viewPageHome.php");
    }

    private function displayListChapter($stateChapter = null)
    {
        $dataDisplayListChapter = $this->objectModelChapter->getDisplayListChapter($stateChapter);
        return $dataDisplayListChapter;
    }

    private function displayOneChapter($idChapter)
    {
        $dataDisplayOneChapter = $this->objectModelChapter->getDisplayOneChapter($idChapter);
        return $dataDisplayOneChapter;
    }

    private function updateStateChapter($idChapter,$stateChapter)
    {
        $this->objectModelChapter->updateStateChapter($idChapter,$stateChapter);
        return true;
    }

    private function deleteChapter($idChapter)
    {
        $this->objectModelChapter->deleteChapter($idChapter);
        return true;
    }

    private function updateChapter($idChapter,$titleChapter,$contentChapter)
    {
        $this->objectModelChapter->updateChapter($idChapter,$titleChapter,$contentChapter);
        return true;
    }
}