<?php

class Factory_Sqlite
{
    public $con_sqlite;

    public function connect_to_sqlite()
    {
        $this->con_sqlite = new Sqlite("sqlite:db/test.db");
        $this->con_sqlite->con();
    }

    public function insert_to_sqlite()
    {
        $this->con_sqlite->insert();
    }

    public function query_in_sqlite()
    {

    }

    public function close_sqlite()
    {
        $this->con_sqlite->close();
    }
}