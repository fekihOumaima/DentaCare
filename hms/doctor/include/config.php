<?php
$mysql_hostname ='localhost';
$mysql_user ='root';
$mysql_password ='';
$mysql_database ='hms';

/*$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database,"3308") or die("Could not connect database");
mysqli_select_db($bd,$mysql_database) or die("Could not select database");*/

$mysqli = new mysqli($mysql_hostname,$mysql_user, $mysql_password, $mysql_database,"3308");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>