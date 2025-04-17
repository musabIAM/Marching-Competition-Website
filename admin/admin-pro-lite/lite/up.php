<?php 
include "conec.php";

$ug = $_POST['ugam'];
$tem = $_POST['tema'];


mysql_query("INSERT INTO konten(tema,linkfoto) VALUES ('$tem','$ug')");
header('Location: index.php');

?>