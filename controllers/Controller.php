<?php
/**
 * Created by PhpStorm.
 * User: fedot
 * Date: 03.04.2019
 * Time: 12:56
 */

class Controller

{
    public $model;
    public $view;
    protected $pageData = array();

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

}