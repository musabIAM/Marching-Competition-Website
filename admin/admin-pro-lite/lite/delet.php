<?php 
include "conec.php";
$id = $_GET['id'];
$query = "DELETE FROM akun WHERE id_user = $id";
$result = mysql_query($query);

header('Location: table-basic.php');
 ?> 