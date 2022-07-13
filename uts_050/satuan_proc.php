<?php
include "koneksi.php";

if (isset($_POST['proses']) and $_POST['proses'] == 'SIMPAN'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
	$crt_date = date("Y-m-d H:i:s");
	$upd_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO satuan (id, nama, crt_date, upd_date)
            VALUES ('$id', '$nama', '$crt_date', '$upd_date')";
    if (!$res = $koneksi->query($sql))
        echo $sql;
    else 
        header("Location: satuan.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='PERBAHARUI'){
	$id = $_POST['id'];
	$nama = $_POST['nama'];

	$sql = "UPDATE satuan
			SET nama='$nama'
	    	WHERE id='$id'";
	if(!$res = $koneksi->query($sql))
		echo $sql;
	else
		header("Location: satuan.php");
}

if(isset($_POST['proses']) && $_POST['proses']=='HAPUS'){
	echo "hapus";
	$id = $_POST['id'];
	$sql = "DELETE FROM satuan
			WHERE id='$id'";
	if(!$res = $koneksi->query($sql))
		echo $sql;
	else
		header("Location: satuan.php");
}

?>
