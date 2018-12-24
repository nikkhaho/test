<?php

interface db1
{
    public function connect($type, $insert, $query);

    public function insert();

    public function query();
}

class Mysql implements db1
{
    public $con;

    public function connect($t, $i, $q)
    {
        // TODO: Implement connection() method.
        $this->con = new pdo($t, $i, $q);
        if ($this->con) {
            echo "ok";
        }
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

$call_class_mysql = new Mysql();
$call_class_mysql->connect("mysql:host=127.0.0.1;dbname=test1;charset=utf8", "root", "");
