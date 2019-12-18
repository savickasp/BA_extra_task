<?php


class App
{
    // properties
    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->setValues();
        $this->checkController();
        $this->checkMethod();

        new $this->controller($this->method, $this->params);
    }

    private function setValues()
    {
        // get URL
        $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

        //controller
        $this->controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : 'Home';
        array_shift($url);

        //action
        $this->method = (isset($url[0]) && $url[0] != '') ? $url[0] : 'index';
        array_shift($url);

        //params
        $this->params = $url;

        $url = null;
    }

    private function checkController()
    {
        //check if controller exist
        if (!class_exists($this->controller)) {
            $this->controller = 'customError';
            $this->method = 'page404';
            $this->params = [];
        }
    }

    private function checkMethod()
    {
        //check if method exist
        if (!method_exists($this->controller, $this->method)) {
            $this->controller = 'customError';
            $this->method = 'page404';
            $this->params = [];
        }
    }

}