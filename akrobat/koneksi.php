<?php
$konek_mysql=mysql_connect('localhost','root','');
$konek_db=mysql_select_db('akro');

if($konek_mysql==false){
	die("Koneksi denga MYSQL gagal");
}

if($konek_db==false){
	die("Database tidak ada");
}

?>