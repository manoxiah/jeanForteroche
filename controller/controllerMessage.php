<?php

require_once("./view/backOffice/model/modelMessage.php");

class controllerMessage
{
    private $objectModelMessage;

    public function __construct()
    {
        $this->objectModelMessage = new modelMessage();
    }





    public function replyMessage($idMessage,$email,$stateMessage,$subject,$contentReplyMessage)
    {
        $this->objectModelMessage->replyMessage($idMessage,$email,$subject,$contentReplyMessage);
        $this->updateMessage($idMessage,$stateMessage);
        header("Location: ./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0" );
    }

    public function updateMessagePageDashboard($idMessage,$stateMessage)
    {
        $this->updateMessage($idMessage,$stateMessage);
        header("Location: ./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0" );
    }
    public function sendMessageFormContact($name,$email,$contentMessage)
    {
        $this->sendMessage($name,$email,$contentMessage);
        header("Location: ./index.php?callPage=contact" );
    }

    public function displayOneMessagePageDashboard($idMessage)
    {
        $displayOneMessage = $this->displayOneMessage($idMessage);
        require_once("./view/viewPageDashboard.php");
    }

    public function displayListLineMessageByStateMessagePageDashboard($stateMessage)
    {
        $displayListLineMessage = $this->displayListLineMessageByStateMessage($stateMessage);
        require_once("./view/viewPageDashboard.php");
    }

    private function displayListLineMessageByStateMessage($stateMessage)
    {
        $dataMessage = $this->objectModelMessage->getDisplayListLineMessageByStateMessage($stateMessage);
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



