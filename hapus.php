<?php 
include 'conn.php';

$id = $_GET['id'];
mysql_query("DELETE FROM admin WHERE id = $id") or die("Delete Gagal");
header("location:view.php");

?>