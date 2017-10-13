<?php 
include 'conn.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$query = mysql_query("INSERT INTO admin VALUES('','$username','$password','$level')") or die("Gagal input");
header("location:input.php");

?>