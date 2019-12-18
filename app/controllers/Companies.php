<?php


class Companies extends Controller
{

    public function __construct($method, $params)
    {
        parent::__construct($method, $params);
        $this->view = new CompaniesView();
        $this->{$this->method}($params);
    }

    private function index()
    {
        $this->view->setPageTitle('labas');
        $this->view->printPage();
    }
}