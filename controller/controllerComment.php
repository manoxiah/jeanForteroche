<?php

require_once("./view/backOffice/model/modelComment.php");

class controllerComment
{
    private $objectModelComment;

    public function __construct()
    {
        $this->objectModelComment = new modelComment();
    }





    public function deleteListCommentForOneChapter($idChapter)
    {
        $this->deleteCommentForOneChapter($idChapter);
    }
    public function updateCommentChapterPageDashboard($idComment,$stateComment)
    {
        $this->updateComment($idComment,$stateComment);
        header("Location: ./index.php?callPage=dashboardDisplayListLineComment&stateComment=0" );
    }

    public function updateCommentChapterPageChapter($idComment,$stateComment,$idChapter)
    {
        $this->updateComment($idComment,$stateComment);
        header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter" );
    }

    public function sendCommentChapter($idChapter,$contentComment,$pseudo)
    {
        $this->sendComment($idChapter,$contentComment,$pseudo);
        header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter" );
    }

    public function displayOneCommentPageDashboard($idComment)
    {
        $displayOneComment = $this->displayOneComment($idComment);
        require_once("./view/viewPageDashboard.php");
    }

    public function displayListLineCommentByStateCommentPageDashboard($stateComment)
    {
        $displayListLineCommentByStateComment = $this->displayListLineCommentByStateComment($stateComment);
        require_once("./view/viewPageDashboard.php");
    }

    public function displayListCommentForOneChapterPageChapter($idChapter)
    {
        return $this->displayListCommentForOneChapter($idChapter);
    }

    private function displayListCommentForOneChapter($idChapter)
    {
        $dataDisplayListCommentForOneChapter = $this->objectModelComment->getDisplayListCommentForOneChapter($idChapter);
        return $dataDisplayListCommentForOneChapter;
    }

    private function displayListLineCommentByStateComment($stateComment)
    {
        $dataComment = $this->objectModelComment->getDisplayListLineCommentByStateComment($stateComment);
        return $dataComment;
    }

    private function displayOneComment($idComment)
    {
        $dataComment = $this->objectModelComment->getDisplayOneComment($idComment);
        return $dataComment;
    }

    private function sendComment($idChapter,$contentComment,$pseudo)
    {
        $this->objectModelComment->sendComment($idChapter,$contentComment,$pseudo);
        return true;
    }

    private function updateComment($idComment,$stateComment)
    {
        $this->objectModelComment->updateComment($idComment,$stateComment);
        return true;
    }

    private function deleteCommentForOneChapter($idChapter)
    {
        $this->objectModelComment->deleteCommentForOneChapter($idChapter);
        return true;
    }
}



