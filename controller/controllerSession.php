<?php



class controllerSession
{

    public function setMessage($key, $contentMessage)
    {
        $_SESSION['messageFlash'][$key] = $contentMessage;
    }
    public function getMessage()
    {
        return isset($_SESSION['messageFlash']);
    }
    public function deleteMessage()
    {
        $MessageFlash = $_SESSION['messageFlash'];
        unset($_SESSION['messageFlash']);
        return $MessageFlash;
    }
}
