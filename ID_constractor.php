<?php

interface db_1
{
    public function insert();

    public function query();
}

class Mysql implements db_1
{
    public $con;

    public function __construct($server, $username, $password)
    {
        $this->con = new pdo($server, $username, $password);
        var_dump($this->con);
    }

    public function insert()
    {
        // TODO: Implement insert() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }
}

$con_mysql = new Mysql("mysql:host=127.0.0.1;dbname=test1;charset=utf8", "root", "");