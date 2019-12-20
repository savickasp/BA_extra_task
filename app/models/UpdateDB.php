<?php


class UpdateDB extends Model
{
    protected $decodedJSON;
    protected $compArray;
    protected $wageMonthlyArray;
    protected $insuredMonthlyArray;
    protected $taxMonthlyArray;

    public function __construct($jsonFileName)
    {
        parent::__construct();
        $this->prepArrayInserts($jsonFileName);
        $this->updateAllDatabase();
    }

    public function prepArrayInserts($jsonFileName)
    {
        $this->decodeJSON($jsonFileName);
        $this->createCompArray();
        $this->createWageMonthlyArray();
        $this->createInsuredMonthlyArray();
        $this->createTaxMonthlyArray();
    }

    public function updateAllDatabase()
    {
        $this->setValuesSQL($this->compArray);
        $this->insertMultipleData();

        $this->setValuesSQL($this->wageMonthlyArray);
        $this->insertMultipleData();

        $this->setValuesSQL($this->insuredMonthlyArray);
        $this->insertMultipleData();

        $this->setValuesSQL($this->taxMonthlyArray);
        $this->insertMultipleData();
    }

    /*
     *  I am using this type of JSON decode because I couldn't parse whole file because of it's size
     */
    private function decodeJSON($jsonFileName)
    {
        $jsondata = file_get_contents(ROOT . '/public/json/' . $jsonFileName . '.json');
        $this->decodedJSON = json_decode($jsondata, true);
    }

    private function createCompArray()
    {
        $val = '';
        $i = 0;
        foreach ($this->decodedJSON as $companie) {
            if ($i++) $val .= ',';
            $val .= "('" . $companie['lookupId'] . "', '" . $companie['code'] . "', '" . $companie['jarCode'] . "', '" . $companie['name'] . "', '" . $companie['ecoActName'] . "', '" . $companie['ecoActCode'] . "', '" . $companie['municipality'] . "')";
        }
        $this->compArray = [
            't1name' => 'companies',
            't1colums' => 'lookupId, code, jarCode, name, ecoActName, ecoActCode, municipality',
            'insertMultipleVal' => $val,
        ];
    }

    private function createWageMonthlyArray()
    {
        $val = '';
        $i = 0;
        foreach ($this->decodedJSON as $companie) {
            if ($i++) $val .= ',';
            $val .= "('" . $companie['lookupId'] . $companie['month'] . "', '" . $companie['lookupId'] . "', '" . $companie['month'] . "', '" . $companie['avgWage'] . "', '" . $companie['avgWage2'] . "')";
        }
        $this->wageMonthlyArray = [
            't1name' => 'avg_wage',
            't1colums' => 'lookupIdMonth, lookupId, month, avgWage, avgWage2',
            'insertMultipleVal' => $val,
        ];
    }

    private function createInsuredMonthlyArray()
    {
        $val = '';
        $i = 0;
        foreach ($this->decodedJSON as $companie) {
            if ($i++) $val .= ',';
            $val .= "('" . $companie['lookupId'] . $companie['month'] . "', '" . $companie['lookupId'] . "', '" . $companie['month'] . "', '" . $companie['numInsured'] . "', '" . $companie['numInsured2'] . "')";
        }
        $this->insuredMonthlyArray = [
            't1name' => 'insured',
            't1colums' => 'lookupIdMonth, lookupId, month, numInsured, numInsured2',
            'insertMultipleVal' => $val,
        ];
    }

    private function createTaxMonthlyArray()
    {
        $val = '';
        $i = 0;
        foreach ($this->decodedJSON as $companie) {
            if ($i++) $val .= ',';
            $val .= "('" . $companie['lookupId'] . $companie['month'] . "', '" . $companie['lookupId'] . "', '" . $companie['month'] . "', '" . $companie['tax'] . "')";
        }
        $this->taxMonthlyArray = [
            't1name' => 'tax',
            't1colums' => 'lookupIdMonth, lookupId, month, tax',
            'insertMultipleVal' => $val,
        ];
    }
}