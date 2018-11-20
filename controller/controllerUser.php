<?php

require_once("./view/backOffice/model/modelUser.php");
require_once('./controller/controllerValidator.php');


class controllerUser extends controllerValidator
{
    private $objectModelUser;

    public function __construct()
    {
        $this->objectModelUser = new modelUser();
    }




    public function logoutUser()
    {
        session_unset ();
        session_destroy ();

        header ('location: index.php');
    }

    public function displayPageLoginUser()
    {
        require_once("./view/viewPageLoginUser.php");
    }

    public function validateLoginUser($email,$password)
    {
        $arrayArg = compact($email,$password);

        if (($this->requestValidator('POST'))
            and $this->isEmptyValidator($arrayArg))
        {
            $this->protectedInputValidator($arrayArg);
            extract($arrayArg);

            $connectionUser = $this->loginUser($email,$password);

            if (password_verify($password,$connectionUser['mdp']))
            {
                session_start ();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['admin'] = "jeanForteroche";

                header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1&colorButtonNavDashboard=0" );
            }
            else
            {
                header("Location: ./index.php?callPage=loginUser" );
            }
        }
        return false;
    }














    private function loginUser($email,$password)
    {
        $dataLoginUser = $this->objectModelUser->getLoginUser($email,$password);
        return $dataLoginUser;
    }
}
