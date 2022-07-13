<?php
include "koneksi.php";

if (isset($_POST['proses']) and $_POST['proses'] == 'SIMPAN'){
    $id = $_POST['id'];
    $upline = $_POST['upline'];
    $nama = $_POST['nama'];
    $crt_date = date("Y-m-d H:i:s");
	$upd_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO item_grp (id, nama, upline, crt_date, upd_date)
            VALUES ('$id', '$nama', '$upline', '$crt_date', $upd_date)";
    if (!$res = $koneksi->query($sql))
        echo $sql;
    else 
        header("Location: item_grp.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='PERBAHARUI'){
	$id = $_POST['id'];
    $upline = $_POST['upline'];
	$nama = $_POST['nama'];

	$sql = "UPDATE item_grp
			SET upline='$upline', nama='$nama'
		    WHERE id='$id'";
	if(!$res = $koneksi->query($sql))
		echo $sql;
	else
		header("Location: item_grp.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM item_grp
			WHERE id='$id'";
	if(!$res = $koneksi->query($sql))
		echo $sql;
	else
		header("Location: item_grp.php");
}

?>