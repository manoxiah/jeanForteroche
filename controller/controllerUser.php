<?php

require_once("./model/modelUser.php");


class controllerLogin
{
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
        $objetLoginUser = new Login();
        $donneesLoginUser = $objetLoginUser->getLoginUser($email,$password);
        return $donneesLoginUser;
    }
}
