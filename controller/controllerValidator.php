<?php


class controllerValidator
{


    /**
     * @param $method
     * @return bool
     */
    public function requestValidator($method) // on passe ici la méthode que l'on attend
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
}