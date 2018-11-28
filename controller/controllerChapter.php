<?php

require_once("./view/backOffice/model/modelChapter.php");
require_once('./controller/controllerValidator.php');
require_once('./controller/controllerSession.php');

class controllerChapter extends controllerValidator
{
    private $objectModelChapter;
    private $objectControllerComment;
    private $flash;


    public function __construct()
    {
        $this->objectModelChapter = new modelChapter();
        $this->objectControllerComment = new controllerComment();
        $this->flash = new controllerSession();
    }



    //function à sécuriser


    public function displayFormEditChapter()
    {
        require_once("./view/viewPageDashboard.php");
    }

    public function updateChapterPageDashboard($stateChapter,$idChapter,$titleChapter,$contentChapter)
    {
        $arrayArg = compact($stateChapter,$idChapter,$titleChapter,$contentChapter);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->updateChapter($idChapter,$titleChapter,$contentChapter);
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Les modifications du chapitre ont été enregistré.');

            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
        }
        return false;
    }

    public function deleteChapterPageDashboard($idChapter)
    {
        $arrayArg = compact($idChapter);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->deleteChapter($idChapter);
            $this->objectControllerComment->deleteListCommentForOneChapter($idChapter);
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Les suppression du chapitre a été enregistré.');

            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
        }
        return false;
    }

    public function updateStateChapterPageDashboard($idChapter,$stateChapter)
    {
        $arrayArg = compact($idChapter,$stateChapter);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->updateStateChapter($idChapter,$stateChapter);

            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1" );
        }
        return false;
    }

    public function sendNewChapter($numberChapter,$titleChapter,$contentChapter)
    {
        $arrayArg = compact($numberChapter,$titleChapter,$contentChapter);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->objectModelChapter->sendNewChapter($numberChapter,$titleChapter,$contentChapter);
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Le chapitre a été enregistré.');

            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=0" );
        }
        return false;
    }

    public function displayOneChapterPageDashboard($idChapter)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($idChapter)))
        {
            $displayOneChapterPageChapter = $this->displayOneChapter($idChapter);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayOneChapterPageChapter($idChapter)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($idChapter)))
        {
            $displayOneChapterPageChapter = $this->displayOneChapter($idChapter);
            $displayListCommentForOneChapterPageChapter = $this->objectControllerComment->displayListCommentForOneChapterPageChapter($idChapter);
        require_once("./view/viewPageChapter.php");
        }
        return false;
    }

    public function displayListLineChapterPageDashboard($stateChapter)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateChapter)))
        {
            $displayListLineChapterPageDashboard = $this->displayListChapter($stateChapter);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListChapterPageChapter($stateChapter)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateChapter)))
        {
            $displayListChapterPageChapter = $this->displayListChapter($stateChapter);
            require_once("./view/chapter/viewDisplayListSmallChapter.php");
        }
        return false;
    }

    public function displayListChapterPageHome($stateChapter)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateChapter)))
        {
            $displayListChapterPageHome = $this->displayListChapter($stateChapter);
            require_once("./view/viewPageHome.php");
        }
        return false;

    }









    //function private

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