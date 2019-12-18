<?php


class Controller
{
    protected $view;
    protected $method;
    protected $params;

    protected function __construct($method, $params)
    {
        $this->method = $method;
        $this->params = $params;
    }
}