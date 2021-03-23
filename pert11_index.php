<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body>
	<h2>Contact</h2>
	<hr size="1">
	<form name="Tamu" method="post" action="simpan.php">
		Nama <input style="margin: 5px 5px 5px 20px;" type="text" name="nama"><br>
		Email <input style="margin: 5px 5px 5px 22px;" type="text" name="email"><br>
		Alamat <input style="margin: 5px 5px 5px 13px;" type="text" name="alamat"><br>
		Kota <input style="margin: 5px 5px 5px 26px;" type="text" name="kota"><br>
		pesan <br><textarea style="width: 210px; margin-bottom: 10px;" name="komentar"></textarea><br>
		<input type="submit" name="submit" value="send"> <input type="reset" name="reset" value="Reset">
	</form>
</body>
</html>