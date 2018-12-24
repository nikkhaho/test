<?php
interface Database
{
 public function connection();
 public function query();
 public function insert();
 public function delete();

}
class Mysql implements Database
{
    public $con;
    public $search;
    public function connection()
    {
        // TODO: Implement connection() method.
        $this->con= mysqli_connect('127.0.0.1', 'root', '', 'test1');

    }

    public function query()
    {
        $ins=mysqli_query($this->con,$this->search);

//      var_dump($ins);
//      exit();
        //($this->con,"select * from tbl_test");
        // TODO: Implement query() method.

    }
    public function insert()
    {

        // TODO: Implement insert() method.
    }
    public function delete()
    {
    // TODO: Implement delete() method.
    }

}
class sqlite implements database
{
   public $dbsqlite;
public function connection()
{
   $this->dbsqlite=new pdo("sqlite:db/test.db");
   var_dump( $this->dbsqlite);
    // TODO: Implement connection() method.
}
public function query()
{
    $count = $this->dbsqlite->exec("INSERT INTO test1(name,fname) VALUES ('OMID','NIKKHAH')");

    // TODO: Implement query() method.
}
public function insert()
{
    // TODO: Implement insert() method.
}
public function delete()
{
    // TODO: Implement delete() method.
}
public function fetch()
{
    // TODO: Implement fetch() method.
}
}
//$connection=new Mysql();
//$connection->connection();
//$connection->query();
$con_sqlite=new sqlite();
$con_sqlite->connection();
$con_sqlite->query();



?>