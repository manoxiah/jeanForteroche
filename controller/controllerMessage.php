<?php

require_once("./view/backOffice/model/modelMessage.php");
require_once('./controller/controllerValidator.php');

class controllerMessage extends controllerValidator
{
    private $objectModelMessage;

    public function __construct()
    {
        $this->objectModelMessage = new modelMessage();
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
            $_GET['colorButtonNavDashboard'] = 0;
            header("Location: ./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0" );
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
            $_GET['colorButtonNavDashboard'] = 0;
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
            header("Location: ./index.php?callPage=contact&colorButtonNavContact=0" );
        }
        return false;
    }

    public function displayOneMessagePageDashboard($idMessage)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($idMessage)))
        {
            $displayOneMessage = $this->displayOneMessage($idMessage);
            $_GET['colorButtonNavDashboard'] = 0;
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListLineMessageByStateMessagePageDashboard($stateMessage)
    {
        if (($this->requestValidator('GET'))
            and $this->isEmptyValidator(compact($stateMessage)))
        {
            $displayListLineMessage = $this->displayListLineMessageByStateMessage($stateMessage);
            $countMessageByStateMessage = $this->countCommentByStateMessage($stateMessage);
            $countMessageByStateMessage = $countMessageByStateMessage['numberMessage'] - 10;
            $_GET['colorButtonNavDashboard'] = 0;
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }















    // function private

    private function displayListLineMessageByStateMessage($stateMessage)
    {
        $dataMessage = $this->objectModelMessage->getDisplayListLineMessageByStateMessage($stateMessage);
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
}



