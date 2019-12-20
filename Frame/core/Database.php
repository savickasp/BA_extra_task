<?php


class Database
{
    protected $conn;
    protected $sql;

    protected function __construct()
    {
        try {
            $this->conn = new PDO('mysql:host=' . CONFIG['host'] . ';dbname=' . CONFIG['database'], CONFIG['username'], CONFIG['password']);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            print 'connected';
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    protected function selectArray()
    {
        $ret = $this->conn->query($this->sql)->fetchAll(PDO::FETCH_ASSOC);
        return $ret;
    }

    protected function selectObject()
    {
        $ret = $this->conn->query($this->sql)->fetchAll(PDO::FETCH_OBJ);
        return $ret;
    }

    protected function insert_update_remove()
    {
        $this->conn->prepare($this->sql)->execute();
    }

    public function __destruct()
    {
        $this->conn = null;
    }


}