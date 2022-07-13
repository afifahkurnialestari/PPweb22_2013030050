<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Laporan</title>
</head>
<body>
<h2>Tambah Data</h2>
<a href="satuan_add.php">TAMBAH</a> <a href="satuan.php">LIHAT</a>
<br>
<form action="satuan_proc.php" method="post">
	ID<br>
	<input type="text" name="id"><br>
	Nama<br>
	<input type="text" name="nama"><br>
	<input type="submit" name="proses" value="SIMPAN">
</form>
</body>
</html>