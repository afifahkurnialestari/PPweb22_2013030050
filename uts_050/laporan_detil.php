<?php
include "koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM item WHERE id='$id'";
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
<h2>Detil Data</h2>
<a href="laporan_add.php">TAMBAH</a> <a href="laporan.php">LIHAT</a>
<br>
<form action="laporan_proc.php" method="post">
	ID<br>
	<input type="text" name="id" value="<?php echo $row['id']?>"><br>
	Warna<br>
	<input type="text" name="warna" value="<?php echo $row['warna']?>"><br>
	Nama<br>
	<input type="text" name="nama" value="<?= $row['nama']?>"><br>
	Jenis<br>
	<select name="item_grp_id">
		<?php 
			$sql_item_grp = "SELECT * FROM item_grp";
			$res_item_grp = $koneksi->query($sql_item_grp);
			while($item_grp = $res_item_grp->fetch_array(MYSQLI_BOTH)){
				if($item_grp['id']==$row['item_grp_id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$item_grp['id']."' $select>".$item_grp['nama']."</option>";
			}
		?>
	</select><br>
    Satuan<br>
	<select name="satuan_id">
		<?php 
			$sql_satuan = "SELECT * FROM satuan";
			$res_satuan = $koneksi->query($sql_satuan);
			while($satuan = $res_satuan->fetch_array(MYSQLI_BOTH)){
				if($satuan['id']==$row['satuan_id'])
					$select = 'selected="selected"';
				else
					$select = '';
				echo "<option value='".$satuan['id']."' $select>".$satuan['nama']."</option>";
			}
		?>
	</select><br>
	Harga<br>
	<input type="text" name="hpp" value="<?= $row['hpp']?>"><br>
	<input type="submit" name="proses" value="PERBAHARUI">
	<input type="submit" name="proses" value="HAPUS" onclick="return confirm('Yakin Menghapus Data Ini?')">
</form>
</body>
</html>


