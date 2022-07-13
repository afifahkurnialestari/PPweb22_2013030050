<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM satuan WHERE id='$id'";
$res = $koneksi->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Satuan - Detil</title>
</head>
<body>
<h2>Detil Data</h2>
<a href="satuan_add.php">TAMBAH</a> <a href="satuan.php">LIHAT</a>
<br>
<form action="satuan_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	<input type="submit" name="proses" value="PERBAHARUI">
	<input type="submit" name="proses" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>


