<?php
$hostmysql = "localhost";
$username  = "root";
$password  = "";
$database  = "bukutamu";
$conn = mysqli_connect($hostmysql,$username,$password,$database);
if ($conn){
	echo "<b> koneksi berhasil </b>";
}
else {
	die("<b> koneksi gagal </b>");
}
?>