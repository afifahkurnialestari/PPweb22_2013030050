<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item_grp WHERE id='$id'";
$res = $koneksi->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laporan - Detil</title>
</head>
<body>
<h2>Detil Data Group</h2>
<a href="item_grp_add.php">TAMBAH</a> <a href="item_grp.php">LIHAT</a>
<br>
<form action="item_grp_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
    upline<br>
	<input type="text" name="upline" value="<?= $row['upline']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	<input type="submit" name="proses" value="PERBAHARUI">
	<input type="submit" name="proses" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>


