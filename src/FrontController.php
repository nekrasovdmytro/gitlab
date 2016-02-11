<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.16
 * Time: 12:34
 */

class FrontController extends AbstractController
{
    protected $path;
    protected $params;

    public function preExecute()
    {
        $this->path = '';
        $this->params = [];
    }
}