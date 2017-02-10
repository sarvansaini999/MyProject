<?php
error_reporting(E_DEPRECATED & ~E_ALL & ~E_NOTICE);

/*
* database connection settings
*/
define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_PASSWORD",'');
define("DB_NAME","crm");


class DB_con{
 function __construct()
 {
  $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('error connecting to server'.mysql_error());
  mysql_select_db(DB_NAME, $conn) or die('error connecting to database->'.mysql_error());
 }
}

?>
