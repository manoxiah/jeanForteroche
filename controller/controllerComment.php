<?php

require_once("./model/modelComment.php");

class controllerComment
{
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
        $objetDisplayListCommentForOneChapter = new modelComment();
        $donneesDisplayListCommentForOneChapter = $objetDisplayListCommentForOneChapter->getDisplayListCommentForOneChapter($idChapter);
        return $donneesDisplayListCommentForOneChapter;
    }

    private function displayListLineCommentByStateComment($stateComment)
    {
        $objetComment = new modelComment();
        $donneesComment = $objetComment->getDisplayListLineCommentByStateComment($stateComment);
        return $donneesComment;
    }

    private function displayOneComment($idComment)
    {
        $objetComment = new modelComment();
        $donneesComment = $objetComment->getDisplayOneComment($idComment);
        return $donneesComment;
    }

    private function sendComment($idChapter,$contentComment,$pseudo)
    {
        $objetSendComment = new modelComment();
        $objetSendComment->sendComment($idChapter,$contentComment,$pseudo);
        return true;
    }

    private function updateComment($idComment,$stateComment)
    {
        $objetupdateComment = new modelComment();
        $objetupdateComment->updateComment($idComment,$stateComment);
        return true;
    }

    private function deleteCommentForOneChapter($idChapter)
    {
        $objetDeleteComment = new modelComment();
        $objetDeleteComment->deleteCommentForOneChapter($idChapter);
        return true;
    }
}



