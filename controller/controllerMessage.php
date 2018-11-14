<?php

require_once("./model/modelMessage.php");

class controllerMessage
{
    public function replyMessage($idMessage,$email,$stateMessage,$subject,$contentReplyMessage)
    {
        $objetMessage = new modelMessage();
        $objetMessage->replyMessage($idMessage,$email,$subject,$contentReplyMessage);
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
        $objetMessage = new modelMessage();
        $donneesMessage = $objetMessage->getDisplayListLineMessageByStateMessage($stateMessage);
        return $donneesMessage ;
    }

    private function displayOneMessage($idMessage)
    {
        $objetMessage = new modelMessage();
        $donneesMessage = $objetMessage->getDisplayOneMessage($idMessage);
        return $donneesMessage ;
    }
    private function sendMessage($name,$email,$contentMessage)
    {
        $objetMessage = new modelMessage();
        $objetMessage->getSendMessage($name,$email,$contentMessage);
        return true;
    }

    private function updateMessage($idMessage,$stateMessage)
    {
        $objetMessage = new modelMessage();
        $objetMessage->updateMessage($idMessage,$stateMessage);
        return true;
    }
}



