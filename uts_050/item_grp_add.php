<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Data Group</title>
</head>
<body>
<h2>Tambah Data Group</h2>
<a href="item_grp_add.php">TAMBAH</a> <a href="item_grp.php">LIHAT</a>
<br>
<form action="item_grp_proc.php" method="post">
	ID<br>
	<input type="text" name="id"><br>
    upline<br>
	<input type="text" name="upline"><br>
	Nama<br>
	<input type="text" name="nama"><br>
	Dibuat<br>
	<input type="text" name="crt_date"><br>
	
	<input type="submit" name="proses" value="SIMPAN">
</form>
</body>
</html>