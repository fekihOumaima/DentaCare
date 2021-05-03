
<?php $mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "hms";
/*$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");*/

$mysqli = new mysqli($mysql_hostname,$mysql_user, $mysql_password, $mysql_database,"3308");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
if($_GET['action']=='doctorid'){
	$docinfo=$_POST['docinfo'];
	$query= $mysqli->query("select * from doctors where doctorName=$docinfo");
	$array=$query->fetch_assoc();
	echo $array['docFees'];
	
	}
	?>