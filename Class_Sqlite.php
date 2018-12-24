<?php

class Sqlite implements db
{
    public $con_sqlite;
    public $servername_sqlite;

    public function __construct($server)
    {
        $this->servername_sqlite = $server;
    }

    public function con()
    {
        // TODO: Implement con() method.
        $this->con_sqlite = new pdo($this->servername_sqlite);
    }

    public function insert()
    {
        $array_insert_sqlite = array('name' => 'omid', 'fname' => 'nikkhah');
        // TODO: Implement insert() method.
        $count = $this->con_sqlite->prepare("INSERT INTO test1(name,fname) 
        VALUES (:name,:fname)");
        $count->execute($array_insert_sqlite);
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function close()
    {
        // TODO: Implement close() method.
        $this->con_sqlite = null;
    }
}