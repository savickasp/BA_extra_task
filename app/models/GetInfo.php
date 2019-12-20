<?php


class GetInfo extends Model
{
    protected $requestArray;

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCompanies()
    {
        $this->requestArray = [
            't1name' => 'companies',
            't1colums' => 'code, name, municipality, lookupId',
            'orderBy' => 'name',
        ];
        $this->setValuesSQL($this->requestArray);
        $array = $this->getAllArr();
        return $this->createMoreInfoBtn($array);
    }

    public function getFilteredCompanies()
    {
        $this->requestArray = [
            't1name' => 'companies',
            't1colums' => 'code, name, municipality, lookupId',
            'orderBy' => 'name',
        ];
        $this->requestArray['conditionCol'] = $_REQUEST['searchWhat'];
        $this->requestArray['conditionVal'] = $_REQUEST['searchText'];
        $this->setValuesSQL($this->requestArray);
        $array = $this->getSelectedArr();
        return $this->createMoreInfoBtn($array);
    }

    private function createMoreInfoBtn($array)
    {
        foreach ($array as &$row) {
            $moreInfoBtn = [
                'field' => [
                    'name' => 'lookupId',
                    'type' => 'hidden',
                    'class' => 'formInput',
                ],
                'button' => [
                    'title' => 'More info',
                    'class' => 'searchButton',
                ],
            ];
            $moreInfoBtn['field']['value'] = $row['lookupId'];
            $row['lookupId'] = $moreInfoBtn;
        }
        return $array;
    }

    public function getCompanyData()
    {
        $array = [];

        $id = $_POST['lookupId'];
        $this->requestArray = [
            't1name' => 'companies',
            't1colums' => 'name, code, jarCode, ecoActName, ecoActCode, municipality',
            'orderBy' => 'name',
            'conditionCol' => 'lookupId',
        ];
        $this->requestArray['conditionVal'] = $id;
        $this->setValuesSQL($this->requestArray);
        $array['static'] = $this->getSelectedArr();

        $this->requestArray = [
            't1name' => 'avg_wage',
            't1colums' => 'month, avgWage, avgWage2',
            'orderBy' => 'month',
            'conditionCol' => 'lookupId',
        ];
        $this->requestArray['conditionVal'] = $id;
        $this->setValuesSQL($this->requestArray);
        $array['monthly']['wage'] = $this->getSelectedArr();

        $this->requestArray = [
            't1name' => 'insured',
            't1colums' => 'month, numInsured, numInsured2',
            'orderBy' => 'month',
            'conditionCol' => 'lookupId',
        ];
        $this->requestArray['conditionVal'] = $id;
        $this->setValuesSQL($this->requestArray);
        $array['monthly']['insured'] = $this->getSelectedArr();

        $this->requestArray = [
            't1name' => 'tax',
            't1colums' => 'month, tax',
            'orderBy' => 'month',
            'conditionCol' => 'lookupId',
        ];
        $this->requestArray['conditionVal'] = $id;
        $this->setValuesSQL($this->requestArray);
        $array['monthly']['tax'] = $this->getSelectedArr();

        return $array;
    }
}