<?php

require_once("./view/model/modelMessage.php");
require_once('./controller/controllerSession.php');

class controllerMessage extends controllerValidator
{
    private $objectModelMessage;
    private $flash;

    public function __construct()
    {
        $this->objectModelMessage = new modelMessage();
        $this->flash = new controllerSession();
    }




    // function déjà sécurisées

    public function replyMessage($idMessage,$email,$stateMessage,$subject,$contentReplyMessage)
    {
        $arrayArg = compact($idMessage,$email,$stateMessage,$subject,$contentReplyMessage);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);

            $this->objectModelMessage->replyMessage($idMessage,$email,$subject,$contentReplyMessage);
            $this->updateMessage($idMessage,$stateMessage);
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Votre message a été envoyé.');


            header("Location: ./index.php?callPage=dashboardDisplayOneMessage&stateMessage=$stateMessage&idMessage=$idMessage" );
        }
        return false;
    }

    public function updateMessagePageDashboard($idMessage,$stateMessage)
    {
        $arrayArg = compact($idMessage,$stateMessage);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);

            $this->updateMessage($idMessage,$stateMessage);

            header("Location: ./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0" );
        }
        return false;
    }
    public function sendMessageFormContact($name,$email,$contentMessage)
    {
        $arrayArg = compact($name,$email,$contentMessage);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);
            $this->sendMessage($name,$email,$contentMessage);
            $this->flash->setMessage('alertGeneric backgroundColorAlertValid','Votre message a été envoyé.');

            header("Location: ./index.php?callPage=contact" );
        }
        return false;
    }

    public function displayOneMessagePageDashboard($idMessage)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($idMessage)))
        {
            $displayOneMessage = $this->displayOneMessage($idMessage);
            $displayListReplyMessage = $this->displayListReplyMessage($idMessage);

            require_once("./view/viewBodyPage/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListLineMessageByStateMessagePageDashboard($stateMessage)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateMessage)))
        {
            $countMessageByStateMessage = $this->countCommentByStateMessage($stateMessage);
            $numberMessage = $countMessageByStateMessage['numberMessage'];
            $numberMessageForPage = 15;
            $numberPage = ceil($numberMessage/$numberMessageForPage);

            if ((isset($_GET['numberCurrentPage'])) and $_GET['numberCurrentPage']>0 and $_GET['numberCurrentPage']<=$numberPage)
            {
                $numberCurrentPage = $_GET['numberCurrentPage'];
            }
            else
            {
                $numberCurrentPage = 1;
            }

            $displayListLineMessage = $this->displayListLineMessageByStateMessage($stateMessage,$numberMessageForPage,$numberCurrentPage);

            require_once("./view/viewBodyPage/viewPageDashboard.php");
        }
        return false;
    }















    // function private

    private function displayListLineMessageByStateMessage($stateMessage,$numberMessageForPage,$numberCurrentPage)
    {
        $dataMessage = $this->objectModelMessage->getDisplayListLineMessageByStateMessage($stateMessage,$numberMessageForPage,$numberCurrentPage);
        return $dataMessage ;
    }

    private function countCommentByStateMessage($stateMessage)
    {
        $dataMessage = $this->objectModelMessage->countCommentByStateMessage($stateMessage);
        return $dataMessage ;
    }

    private function displayOneMessage($idMessage)
    {
        $dataMessage = $this->objectModelMessage->getDisplayOneMessage($idMessage);
        return $dataMessage ;
    }
    private function sendMessage($name,$email,$contentMessage)
    {
        $this->objectModelMessage->getSendMessage($name,$email,$contentMessage);
        return true;
    }

    private function updateMessage($idMessage,$stateMessage)
    {
        $this->objectModelMessage->updateMessage($idMessage,$stateMessage);
        return true;
    }

    private function displayListReplyMessage($idMessage)
    {
        $dataMessage = $this->objectModelMessage->getDisplayListReplyMessage($idMessage);
        return $dataMessage ;
    }
}



