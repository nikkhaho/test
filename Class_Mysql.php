<?php

class Mysql implements db
{
    public $con_mysql;
    public $servername_mysql;
    public $username_mysql;
    public $pass_mysql;

    public function __construct($server, $username, $pass)
    {
        $this->servername_mysql = $server;
        $this->username_mysql = $username;
        $this->pass_mysql = $pass;
    }

    public function con()
    {
        // TODO: Implement con_test1() method.
        $this->con_mysql = new pdo($this->servername_mysql, $this->username_mysql, $this->pass_mysql);
    }

    public function insert()
    {
        // TODO: Implement insert_test1() method.
        $array1 = array('name' => 'omid', 'f_name' => 'nikkhah');
        $query = $this->con_mysql->prepare("insert into tbl_test (name1,fname)
        value(:name,:f_name)");
        $query->execute($array1);
    }

    public function query()
    {
        // TODO: Implement query_test1() method.
        $query_mysql = "select";
    }

    public function close()
    {
        // TODO: Implement close() method.
        $this->con_mysql = null;
    }

}
