<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.16
 * Time: 12:31
 */

abstract class AbstractController
{
    abstract function preExecute();


    public function getUrl()
    {
        return $_SERVER['REQUEST_URL'];
    }

    public function getParams()
    {
        $params = parse_url($_SERVER['REQUEST_URL']);

        return $params['query'];
    }
}