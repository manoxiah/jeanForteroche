<?php

require_once("./view/backOffice/model/modelChapter.php");
require_once('./controller/controllerValidator.php');

class controllerChapter extends controllerValidator
{
    private $objectModelChapter;
    private $objectControllerComment;
    private $objectControllerValidator;


    public function __construct()
    {
        $this->objectModelChapter = new modelChapter();
        $this->objectControllerComment = new controllerComment();
        $this->objectControllerValidator = new controllerValidator();
    }



/* function public */

    public function updateChapterPageDashboard($stateChapter,$idChapter,$titleChapter,$contentChapter)
    {
        $arrayArg = compact($stateChapter,$idChapter,$titleChapter,$contentChapter);

        if ((controllerValidator::requestValidator($this->objectControllerValidator->varPost))
            and controllerValidator::isEmptyValidator($arrayArg)
            and controllerValidator::protectedInputValidator($arrayArg))
        {
            $this->updateChapter($idChapter,$titleChapter,$contentChapter);
            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
        }
        return false;
    }
    public function deleteChapterPageDashboard($idChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idChapter)))
        {
            $this->deleteChapter($idChapter);
            $this->objectControllerComment->deleteListCommentForOneChapter($idChapter);
            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
        }
        return false;
    }

    public function updateStateChapterPageDashboard($idChapter,$stateChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idChapter,$stateChapter)))
        {
            $this->updateStateChapter($idChapter,$stateChapter);
            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
        }
        return false;
    }
    public function sendNewChapter($numberChapter,$titleChapter,$contentChapter)
    {
        $arrayArg = compact($numberChapter,$titleChapter,$contentChapter);

        if ((controllerValidator::requestValidator($this->objectControllerValidator->varPost))
            and controllerValidator::isEmptyValidator($arrayArg)
            and controllerValidator::protectedInputValidator($arrayArg))
        {
            $this->objectModelChapter->sendNewChapter($numberChapter,$titleChapter,$contentChapter);
            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
        }
        return false;
    }

    public function displayOneChapterPageDashboard($idChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idChapter)))
        {
            $displayOneChapterPageChapter = $this->displayOneChapter($idChapter);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayOneChapterPageChapter($idChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idChapter)))
        {
            $displayOneChapterPageChapter = $this->displayOneChapter($idChapter);
            $displayListCommentForOneChapterPageChapter = $this->objectControllerComment->displayListCommentForOneChapterPageChapter($idChapter);
        require_once("./view/viewPageChapter.php");
        }
        return false;
    }

    public function displayListLineChapterPageDashboard($stateChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($stateChapter)))
        {
            $displayListLineChapterPageDashboard = $this->displayListChapter($stateChapter);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListChapterPageChapter($stateChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($stateChapter)))
        {
            $displayListChapterPageChapter = $this->displayListChapter($stateChapter);
            require_once("./view/chapter/viewDisplayListSmallChapter.php");
        }
        return false;
    }

    public function displayListChapterPageHome($stateChapter)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($stateChapter)))
        {
            $displayListChapterPageHome = $this->displayListChapter($stateChapter);
            $_GET['colorButtonNavHome'] = 0;
            require_once("./view/viewPageHome.php");
        }
        return false;

    }









/* function private traitement */

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