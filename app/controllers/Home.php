<?php


class Home extends Controller
{

    public function __construct($method, $params)
    {
        parent::__construct($method, $params);
        $this->view = new HomeView();
        $this->{$this->method}($params);
    }

    private function index()
    {
        $this->view->setPageTitle('labas');
        $this->view->printPage();
    }
}