<?php

require_once("./view/backOffice/model/modelMessage.php");
require_once('./controller/controllerValidator.php');

class controllerMessage extends controllerValidator
{
    private $objectModelMessage;
    private $objectControllerValidator;

    public function __construct()
    {
        $this->objectModelMessage = new modelMessage();
        $this->objectControllerValidator = new controllerValidator();
    }





    public function replyMessage($idMessage,$email,$stateMessage,$subject,$contentReplyMessage)
    {
        $arrayArg = compact($idMessage,$email,$stateMessage,$subject,$contentReplyMessage);

        if ((controllerValidator::requestValidator($this->objectControllerValidator->varPost))
            and controllerValidator::isEmptyValidator($arrayArg))
        {
            controllerValidator::protectedInputValidator($arrayArg);
            extract($arrayArg);

            $this->objectModelMessage->replyMessage($idMessage,$email,$subject,$contentReplyMessage);
            $this->updateMessage($idMessage,$stateMessage);
            header("Location: ./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0" );
        }
        return false;
    }

    public function updateMessagePageDashboard($idMessage,$stateMessage)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idMessage,$stateMessage)))
        {
            $this->updateMessage($idMessage,$stateMessage);
            header("Location: ./index.php?callPage=dashboardDisplayListLineMessage&stateMessage=0" );
        }
        return false;
    }
    public function sendMessageFormContact($name,$email,$contentMessage)
    {
        $arrayArg = compact($name,$email,$contentMessage);

        if ((controllerValidator::requestValidator($this->objectControllerValidator->varPost))
            and controllerValidator::isEmptyValidator($arrayArg)
            and controllerValidator::protectedInputValidator($arrayArg))
        {
            $this->sendMessage($name,$email,$contentMessage);
            header("Location: ./index.php?callPage=contact" );
        }
        return false;
    }

    public function displayOneMessagePageDashboard($idMessage)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($idMessage)))
        {
            $displayOneMessage = $this->displayOneMessage($idMessage);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
    }

    public function displayListLineMessageByStateMessagePageDashboard($stateMessage)
    {
        if ((controllerValidator::requestValidator($this->objectControllerValidator->varGet))
            and controllerValidator::isEmptyValidator(compact($stateMessage)))
        {
            $displayListLineMessage = $this->displayListLineMessageByStateMessage($stateMessage);
            require_once("./view/viewPageDashboard.php");
        }
        return false;
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



