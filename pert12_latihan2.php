<?php 
$con = mysqli_connect("localhost","root","","latihan_db"); 
if (!$con) 
 { 
 die('Could not connect: ' . mysql_error()); 
 } 
$proses = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'"; 
$hasil = mysqli_query($con, $proses);
mysqli_close($con);

echo "Data Berhasil Dihapus";

?> 