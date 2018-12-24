<?php

class Factory_Mysql
{
    public $con_mysql;

    public function connect_to_mysql()
    {
        $this->con_mysql = new Mysql("mysql:host=127.0.0.1;dbname=test1;charset=utf8", "root", "");
        $this->con_mysql->con();

    }

    public function insert_to_mysql()
    {
        $this->con_mysql->insert();
    }

    public function query_in_mysql()
    {

    }

    public function close_mysql()
    {
        $this->con_mysql->close();
    }


}
