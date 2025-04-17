<?php
include "koneksi.php";
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

$query="INSERT INTO bukutamu(nama,email,pesan) VALUES ('$_POST['nama']','$email','$pesan')";
$status=mysql_query($query);
if(isset($status)){
	header('location:contact.php');
}
else{
	echo "gagal";
}
?>