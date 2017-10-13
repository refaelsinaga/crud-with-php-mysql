<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$db = "rl_crud";

$conn = mysql_connect($localhost, $username, $password) or die(mysql_error()); 
mysql_select_db($db) or die(mysql_error());
?>

<!-- facaebook | twitter | Instagram : @refalsinaga-->