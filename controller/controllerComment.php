<?php

require_once("./view/model/modelComment.php");
require_once('./controller/controllerSession.php');

class controllerComment extends controllerValidator
{
    private $objectModelComment;
    private $flash;

    public function __construct()
    {
        $this->objectModelComment = new modelComment();
        $this->flash = new controllerSession();
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
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Votre signalement de commentaire a été envoyé avec succès.');

            header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter" );
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
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Le commentaire a été mis à jour.');

            header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter" );
        }
        return false;
    }

    public function displayOneCommentPageDashboard($idComment)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($idComment)))
        {
            $displayOneComment = $this->displayOneComment($idComment);
            require_once("./view/viewBodyPage/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListLineCommentByStateCommentPageDashboard($stateComment)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateComment)))
        {
            $countCommentByStateComment = $this->countCommentByStateComment($stateComment);
            $numberComment = $countCommentByStateComment['numberComment'];
            $numberCommentForPage = 15;
            $numberPage = ceil($numberComment/$numberCommentForPage);

            if ((isset($_GET['numberCurrentPage'])) and $_GET['numberCurrentPage']>0 and $_GET['numberCurrentPage']<=$numberPage)
            {
                $numberCurrentPage = $_GET['numberCurrentPage'];
            }
            else
            {
                $numberCurrentPage = 1;
            }
            $displayListLineCommentByStateComment = $this->displayListLineCommentByStateComment($stateComment,$numberCommentForPage,$numberCurrentPage);

            require_once("./view/viewBodyPage/viewPageDashboard.php");
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

    private function displayListLineCommentByStateComment($stateComment,$numberCommentForPage,$numberCurrentPage)
    {
        $dataComment = $this->objectModelComment->getDisplayListLineCommentByStateComment($stateComment,$numberCommentForPage,$numberCurrentPage);
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



