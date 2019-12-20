<?php


class Model extends Database
{
    protected $t1name, $t1colums;
    protected $conditionCol, $conditionVal;
    protected $insertMultipleVal;
    protected $orderBy;

    public function __construct()
    {
        parent::__construct();
    }

    protected function setValuesSQL($array)
    {
        foreach ($array as $propName => $propVal) {
            $this->$propName = $propVal;
        }
    }

    //get all table data from specified table as string elements in array
    protected function getAllArr()
    {
        $this->sql = "SELECT $this->t1colums
            FROM $this->t1name
            WHERE 1 
            ORDER BY  $this->orderBy";
        return parent::selectArray();
    }

    //get filtered data from table as string elements in array
    protected function getSelectedArr()
    {
        $this->sql = "SELECT $this->t1colums
            FROM $this->t1name
            WHERE $this->conditionCol LIKE '%$this->conditionVal%'
            ORDER BY '$this->orderBy'";
        return parent::selectArray();
    }

    //insert new data to table
    protected function insertMultipleData()
    {
        $this->sql = "INSERT IGNORE INTO $this->t1name($this->t1colums)
            VALUES $this->insertMultipleVal";
        parent::insert_update_remove();
    }
}