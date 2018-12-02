<?php


class controllerValidator
{


    /**
     * @param $method
     * @return bool
     */
    public function requestValidator($method)
    {
        return $_SERVER['REQUEST_METHOD'] === $method;

    }

    /**
     * @param $params
     * @return bool
     */
    public function isEmptyValidator($params)
    {
        if (is_array($params))
        {
            $empty = [];
            foreach ($params as $param)
            {
                if(empty($param))
                {
                    $empty[] = $param;
                }
            }
            return empty($empty) ? true : false;
        }
        return false;
    }

    /**
     * @param $params
     * @return array
     */
    public function protectedInputValidator($params)
    {
        if (is_array($params))
        {
            $datas = [];
            foreach ($params as $param)
            {
                $datas[] = htmlspecialchars($param);
            }

            return $datas;
        }
    }

    public function input25CharacterMaxValidator($param)
    {

        if ( ($param == null ) or (strlen($param) > 25))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function input100CharacterMaxValidator($param)
    {

        if ( ($param == null ) or (strlen($param) > 100))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function inputEmailValidator($param)
    {

        if (filter_var($param, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}