<?php


class Companies extends Controller
{

    public function __construct($method, $params)
    {
        parent::__construct($method, $params);
        $this->view = new CompaniesView();
        if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'search') $this->method = 'searchCompanies';
        $this->{$this->method}();
    }

    private function index()
    {
        $this->view->setPageTitle('Companies');
        $this->model = new GetInfo();
        $this->view->setRequestedCompanies($this->model->getAllCompanies());
        $this->view->printPage();
    }

    private function updatedatabase()
    {
        new UpdateDB('test');
        $this->view->setPageTitle('DB updated');
        $this->view->setPage('updated');
        $this->view->printPage();
    }

    private function searchCompanies()
    {
        $this->view->setPageTitle('Companies');
        $this->model = new GetInfo();
        $this->view->setRequestedCompanies($this->model->getFilteredCompanies());
        $this->view->printPage();
    }

    private function detailes()
    {
        $this->view->setPageTitle('Detailes');
        $this->model = new GetInfo();
        $this->view->setPage('detailes');
        $this->view->setTable($this->model->getCompanyData());
        $this->view->printPage();
    }
}