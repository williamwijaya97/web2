<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
	<h1>Buku Tamu</h1>
	<a href="index.php"> Kembali ke Buku Tamu</a>
	<br>
	<h2>BUKU TAMU</h2>
	<a href="tampil.php"> Lihat Buku Tamu</a>
	<hr size="1">
<?php
include ("connect.php");
$sql = "SELECT id, name, email, alamat, kota, komentar FROM tamu";
$result = $conn->query($sql);
if ($result->num_rows >0) {
	while ($row = $result->fetch_assoc()) {
		echo "<br>".
		"id 	: ". $row["id"]."<br>".
		"nama 	: ". $row["nama"]."<br>".
		"email 	: ". $row["email"]."<br>".
		"alamat : ". $row["alamat"]."<br>".
		"kota 	: ". $row["kota"]."<br>".
		"pesan 	: ". $row["komentar"]."<br>";
	}
}
else {
	echo "0 result";
}
$conn->close()

?>
</body>
</html>