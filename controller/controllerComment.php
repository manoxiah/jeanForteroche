<?php

require_once("./view/backOffice/model/modelComment.php");
require_once('./controller/controllerValidator.php');

class controllerComment extends controllerValidator
{
    private $objectModelComment;
    private $objectControllerValidator;

    public function __construct()
    {
        $this->objectModelComment = new modelComment();
        $this->objectControllerValidator = new controllerValidator();
    }





    public function deleteListCommentForOneChapter($idChapter)
    {
        $this->deleteCommentForOneChapter($idChapter);
    }
    public function updateCommentChapterPageDashboard($idComment,$stateComment)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idComment,$stateComment)))
        {
            $this->updateComment($idComment,$stateComment);
            header("Location: ./index.php?callPage=dashboardDisplayListLineComment&stateComment=0" );
        }
        return false;
    }

    public function updateCommentChapterPageChapter($idComment,$stateComment,$idChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idComment,$stateComment,$idChapter)))
        {
            $this->updateComment($idComment,$stateComment);
            header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter&colorButtonNavChapter=0" );
        }
        return false;
    }

    public function sendCommentChapter($idChapter,$contentComment,$pseudo)
    {
        $arrayArg = compact($idChapter,$contentComment,$pseudo);

        if ((controllerValidator::requestValidator($this->objectControllerValidator->varPost))
            and controllerValidator::isEmptyValidator($arrayArg))
        {
            controllerValidator::protectedInputValidator($arrayArg);
                extract($arrayArg);
                $this->sendComment($idChapter,$contentComment,$pseudo);
                header("Location: ./index.php?callPage=chapterDisplayOneChapter&idChapter=$idChapter&colorButtonNavChapter=0" );
        }
        return false;
    }

    public function displayOneCommentPageDashboard($idComment)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idComment)))
        {
            $displayOneComment = $this->displayOneComment($idComment);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListLineCommentByStateCommentPageDashboard($stateComment)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($stateComment)))
        {
            $displayListLineCommentByStateComment = $this->displayListLineCommentByStateComment($stateComment);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
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



