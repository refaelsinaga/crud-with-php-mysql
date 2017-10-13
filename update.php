<?php 
include 'conn.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

mysql_query("UPDATE admin SET username ='$username', password ='$password', level ='$level' WHERE id ='$id' ") or die(mysql_error());
header("location:view.php?pesan=update");

?>