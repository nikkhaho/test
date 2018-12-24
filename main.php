<?php
require 'interface_database.php';
include 'Class_Mysql.php';
include 'Class_Sqlite.php';
include 'Class_Factory_Mysql.php';
include 'Class_Factory_Sqlite.php';

$factory_sqlite = new Factory_Sqlite();
$factory_sqlite->connect_to_sqlite();
$factory_sqlite->insert_to_sqlite();
$factory_sqlite->query_in_sqlite();
$factory_sqlite->close_sqlite();

//$factory_mysql = new Factory_Mysql();
//$factory_mysql->connect_to_mysql();
//$factory_mysql->insert_to_mysql();
//$factory_mysql->query_in_mysql();
//$factory_mysql->close_mysql();
//

