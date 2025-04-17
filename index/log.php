<?php
session_start();
include "proses.php";


$_SESSION["id"] =  $_POST['login'];
$_SESSION["pass"] = $_POST['password'];

if ($_SESSION["id"]!="" && $_SESSION["pass"] !="") {
$akun = mysql_query("SELECT *FROM akun");
while ($row=mysql_fetch_array($akun)) {

  if ($_SESSION["id"]==$row['username'] && $_SESSION["pass"]==$row['password']) {
    if ($row['status']=="admin") {
     echo "<script> alert(\"Admin\");</script>";    
     header('Location: /akro/admin/admin-pro-lite/lite/index.php');
     $_SESSION['salaakun'] = false;
     break(1);
    }elseif ($row['status']=="user"){
      // echo "<script> alert(\"Bukan Admin\");</script>";
      $_SESSION['salaakun'] = false;

     header('Location: /akro/akrobat/index.php');
      break(1);
    }
  }elseif ($_SESSION["id"]!=$row['username'] && $_SESSION["pass"]!=$row['password']) {
    echo "<script> alert(\"salah\");</script>";
      $_SESSION['salaakun'] = true;
  }
  
}

if ($_SESSION['salaakun'] == true) {
    header('Location: index.php');
}
}

?>