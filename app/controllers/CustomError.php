<?php


class CustomError  extends Controller
{

    public function __construct($method, $params)
    {
        $this->$method($params);
    }

    private function page404()
    {
        print '404 page not found';
    }
}