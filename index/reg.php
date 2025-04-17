 <?php
session_start();
include "proses.php";
$un = $_POST['regus'];
$ea = $_POST['regem'];
$pas = $_POST['regpass'];
$conpas = $_POST['regconpass'];
if ($pas != $conpas) {
	
$_SESSION['cek'] = true;
header('Location: index.php');
}else {

$_SESSION['cek'] = false;
mysql_query("INSERT INTO akun(username,password,email) VALUES ('$un','$pas','$ea')");
header('Location: index.php');
}


 ?>