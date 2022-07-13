<?php
include "koneksi.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Grup List</title>
</head>
<body>
    <h2>Laporan Group</h2>
    <a href="item_grp_add.php">TAMBAH</a>  <a href="item_grp.php">LIHAT</a>
    <br>
    <?php
        $sql = "SELECT * FROM item_grp";
        $res = $koneksi->query($sql);
        $jum_data = $res->num_rows;

        echo "Ditemukan $jum_data data";
        echo "<table border='1' width='100%'>";
    	echo "	<thead>
				<tr>
					<td width='5%'>No.</td>
					<td width='5%'>Act</td>
					<td width='10%'>ID</td>
					<td width='15%'>Upline</td>
					<td width='20%'>Nama</td>
                    <td width='20%'>DiBuat</td>
                    <td width='20%'>DiUbah</td>
				</tr>
			</thead
			<tbody>";

        $i = 0;
        while($rows = $res->fetch_array(MYSQLI_BOTH)){
            $i++;
            echo "<tr>
            <td align='center'>$i</td>
            <td align='center'>
                <a href='item_grp_detil.php?id=".$rows['id']."'>DETIL</a>
            </td>
            <td>".$rows['id']."</td>
            <td>".$rows['upline']."</td>
            <td>".$rows['nama']."</td>
            <td>".$rows['crt_date']."</td>
            <td>".$rows['upd_date']."</td>
        </tr>";
        }
        echo "	</tbody>
		</table>"
    ?>
</body>
</html>