<?php 
include "conec.php";
$id = $_GET['id'];
$query = "DELETE FROM bukutamu WHERE no = $id";
$result = mysql_query($query);

header('Location: pages-blank.php');
 ?>