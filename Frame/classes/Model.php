<?php


class Model
{
    protected $t1name, $t1colums;
    protected $t2name, $t2colums;
    protected $conditionCol, $conditionVal;
    protected $insertVal;
    protected $updateVal;

    /* array used for Model construct
    $paramAr = [
        't1name' => '',
        't1colums' => '',
        't2name' => '',
        't2colums' => '',
        'conditionCol' => '',
        'conditionVal' => '',
        'insertVal' => "", //use '' quotes inside
        'updateVal' => '',
    ];
     */

    protected function __construct($array)
    {
        parent::__construct();
        foreach ($array as $propName => $propVal) {
            $this->$propName = $propVal;
        }
    }

    public function setValues($array)
    {
    }

    //get all table data from specified table as objects
    protected function getAllObj()
    {
        $sql = "SELECT $this->t1colums
            FROM $this->t1name
            WHERE 1";
        return parent::selectObject();
    }

    //get all table data from specified table as string elements in array
    protected function getAllArr()
    {
        $sql = "SELECT $this->t1colums
            FROM $this->t1name
            WHERE 1";
        return parent::selectArray($sql);
    }

    //get filtered data from table as objects
    protected function getSelectedObj()
    {
        $sql = "SELECT $this->t1colums
            FROM $this->t1name
            WHERE $this->conditionCol = '$this->conditionVal'";
        return parent::selectObject($sql);
    }

    //get filtered data from table as string elements in array
    protected function getSelectedArr()
    {
        $sql = "SELECT $this->t1colums
            FROM $this->t1name
            WHERE $this->conditionCol = '$this->conditionVal'";
        return parent::selectArray($sql);
    }

    //insert new data to table
    protected function insertData()
    {
        $sql = "INSERT INTO $this->t1name($this->t1colums)
            VALUES($this->insertVal)";
        parent::insert_update_remove($sql);
    }

    //update current data in table (one field)
    protected function updateData()
    {
        $sql = "UPDATE $this->t1name
           SET $this->t1colums = '$this->updateVal'  
           WHERE $this->conditionCol = '$this->conditionVal'";
        var_dump($sql);
        parent::insert_update_remove($sql);
    }

    //delete all data from table
    protected function deleteData()
    {
        $sql = "DELETE FROM $this->t1name
           WHERE $this->conditionCol = '$this->conditionVal'";
        parent::insert_update_remove($sql);
    }
}