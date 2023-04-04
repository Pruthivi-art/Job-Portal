<link href="cardstyle.css" rel="stylesheet">
<?php


$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "job_form";

$connection = mysqli_connect($sname, $unmae, $password, $db_name);
$dbconfig = mysqli_select_db($connection,$db_name);

if (!$dbconfig) {
	echo "Connection failed!";
}


?>
