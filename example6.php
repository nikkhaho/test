<?php
interface database1
{
    public function connection();
    public function query();

}
class Mysql implements database1
{
    public $servername = "localhost";
    public $username = "";
    public $password = "";
    public $connectionstring ="";
    public $db = "";
    public function connection()
    {
        // TODO: Implement mysql() method.
        $this->db = new PDO("mysql:host=127.0.0.1;port=3306;dbname=test1;charset=utf8", "root", "");
        $omid=$this->db->query("INSERT INTO tbl_test (name1,fname) values ('nikkhah','a1')");
        if($omid){
            echo "ok";
    }
    }
    public function query()
    {
//        var_dump($this->db->exec("select NOW()"));
//        exit;
        // TODO: Implement sqlite() method.
//        $omid=$this->db->query("INSERT INTO test1 (namea,fname,passa) values ('nikkhah','a1')");
//        if($omid){
//            echo "ok";
//        }
    }
}
class Sqlite implements database1
{
    public function connection()
    {
        // TODO: Implement connection() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }
}
$con=new Mysql();
$con->connection();
//$con->query();
//var_dump($con);
//$sql="select * from tbl_test";
//echo "$con->query($sql)";
$x = mysqli_connect('127.0.0.1', 'root', '', 'test1') or die ('can not');
$q= mysqli_query($x, 'select NOW()');
//while ($row = mysqli_fetch_assoc($q)){
//    var_dump($row);
//}
?>