<?php

require_once("./view/backOffice/model/modelUser.php");


class controllerUser
{
    private $objectModelUser;

    public function __construct()
    {
        $this->objectModelUser = new modelUser();
    }





    public function displayPageLoginUser()
    {
        require_once("./view/viewPageLoginUser.php");
    }

    public function connectionUser($email,$password,$stateChapter)
    {
        $connectionUser = $this->loginUser($email,$password);

        if (password_verify($password, $connectionUser['mdp']))
        {
            header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=$stateChapter" );
        }
        else
        {
            header("Location: ./index.php?callPage=loginUser" );
        }
    }

    private function loginUser($email,$password)
    {
        $dataLoginUser = $this->objectModelUser->getLoginUser($email,$password);
        return $dataLoginUser;
    }
}
