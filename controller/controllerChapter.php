<?php

require_once("./model/modelChapter.php");

class controllerChapter
{

    public function updateChapterPageDashboard($idChapter,$titleChapter,$contentChapter)
    {
        $this->updateChapter($idChapter,$titleChapter,$contentChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
    }
    public function deleteChapterPageDashboard($idChapter)
    {
        $this->deleteChapter($idChapter);
        $objetControllerComment = new controllerComment();
        $objetControllerComment->deleteListCommentForOneChapter($idChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
    }

    public function updateStateChapterPageDashboard($idChapter,$stateChapter)
    {
        $this->updateStateChapter($idChapter,$stateChapter);
        header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
    }
    public function sendNewChapter($numberChapter,$titleChapter,$contentChapter)
    {
        $objetChapter = new modelChapter();
        $objetChapter->sendNewChapter($numberChapter,$titleChapter,$contentChapter);
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
        $objetControllerComment = new controllerComment();
        $displayListCommentForOneChapterPageChapter = $objetControllerComment->displayListCommentForOneChapterPageChapter($_GET['idChapter']);
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
        require_once("./view/viewPageHome.php");
    }

    private function displayListChapter($stateChapter = null)
    {
        $objetDisplayListChapter = new modelChapter();
        $donneesDisplayListChapter = $objetDisplayListChapter->getDisplayListChapter($stateChapter);
        return $donneesDisplayListChapter;
    }

    private function displayOneChapter($idChapter)
    {
        $objetDisplayOneChapter = new modelChapter();
        $donneesDisplayOneChapter = $objetDisplayOneChapter->getDisplayOneChapter($idChapter);
        return $donneesDisplayOneChapter;
    }

    private function updateStateChapter($idChapter,$stateChapter)
    {
        $objetChapter = new modelChapter();
        $objetChapter->updateStateChapter($idChapter,$stateChapter);
        return true;
    }

    private function deleteChapter($idChapter)
    {
        $objetChapter = new modelChapter();
        $objetChapter->deleteChapter($idChapter);
        return true;
    }

    private function updateChapter($idChapter,$titleChapter,$contentChapter)
    {
        $objetChapter = new modelChapter();
        $objetChapter->updateChapter($idChapter,$titleChapter,$contentChapter);
        return true;
    }
}