<?php



class controllerSession
{

    public function setMessage($key, $content)
    {
        return $_SESSION['messageFlash'][$key] = $content;
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
