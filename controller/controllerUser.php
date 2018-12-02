<?php

require_once("./view/model/modelUser.php");
require_once('./controller/controllerSession.php');


class controllerUser extends controllerValidator
{
    private $objectModelUser;
    private $flash;

    public function __construct()
    {
        $this->objectModelUser = new modelUser();
        $this->flash = new controllerSession();
    }




    public function logoutUser()
    {
        session_unset ();
        session_destroy ();

        header ('location: index.php');
    }

    public function displayPageLoginUser()
    {
        require_once("./view/viewBodyPage/viewPageLoginUser.php");
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
                $_SESSION['jf']['email'] = $email;
                $_SESSION['jf']['password'] = $password;
                $_SESSION['jf']['admin'] = "jeanForteroche";

                header("Location: ./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1&colorButtonNavDashboard=0" );
            }
            else
            {
                $this->flash->setMessage('alertGeneric backgroundColorAlertInvalid','Les champs du formulaire ne sont pas valides, merci de recommencer.');
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
