<?php

require_once("./view/backOffice/model/modelComment.php");
require_once('./controller/controllerValidator.php');

class controllerComment extends controllerValidator
{
    private $objectModelComment;

    public function __construct()
    {
        $this->objectModelComment = new modelComment();
    }





    // function à sécuriser

    public function updateCommentChapterPageDashboard($idComment,$stateComment)
    {
        $arrayArg = compact($idComment,$stateComment);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->updateComment($idComment,$stateComment);
            $_GET['colorButtonNavDashboard'] = 0;
            header("Location: ./index.php?callPage=dashboardDisplayListLineComment&stateComment=0" );
        }
        return false;
    }

    public function updateCommentChapterPageChapter($idComment,$stateComment,$idChapter)
    {
        $arrayArg = compact($idComment,$stateComment,$idChapter);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->updateComment($idComment,$stateComment);
            header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter&colorButtonNavChapter=0" );
        }
        return false;
    }

    public function sendCommentChapter($idChapter,$contentComment,$pseudo)
    {
        $arrayArg = compact($idChapter,$contentComment,$pseudo);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->sendComment($idChapter,$contentComment,$pseudo);
            header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter&colorButtonNavChapter=0" );
        }
        return false;
    }

    public function displayOneCommentPageDashboard($idComment)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($idComment)))
        {
            $displayOneComment = $this->displayOneComment($idComment);
            $_GET['colorButtonNavDashboard'] = 0;
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListLineCommentByStateCommentPageDashboard($stateComment)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateComment)))
        {
            $displayListLineCommentByStateComment = $this->displayListLineCommentByStateComment($stateComment);
            $countCommentByStateComment = $this->countCommentByStateComment($stateComment);
            $countCommentByStateComment = $countCommentByStateComment['numberComment'] - 10;
            $_GET['colorButtonNavDashboard'] = 0;
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    
    
    
    



    // function déjà sécurisées

    public function displayListCommentForOneChapterPageChapter($idChapter)
    {
        return $this->displayListCommentForOneChapter($idChapter);
    }

    public function deleteListCommentForOneChapter($idChapter)
    {
        $this->deleteCommentForOneChapter($idChapter);
    }













    // function private

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

    private function countCommentByStateComment($stateComment)
    {
        $dataCountComment = $this->objectModelComment->countCommentByStateComment($stateComment);
        return $dataCountComment;
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



