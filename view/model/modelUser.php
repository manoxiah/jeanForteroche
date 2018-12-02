<?php

require_once("./view/model/modelLogBDD.php");

class modelUser
{
    private $BDD;

    public function __construct()
    {
        $this->BDD = new BDD();
    }

    public function getLoginUser($email,$password)
    {
        $donneesLoginUser = $this->BDD->connexionBDD()->prepare('SELECT * FROM administrator WHERE email=:a');
        $donneesLoginUser->execute(array('a'=>$email));
        $donneesReqLoginUser = $donneesLoginUser->fetch();
        return $donneesReqLoginUser;
    }

}

