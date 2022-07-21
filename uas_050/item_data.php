<?php
include('koneksi.php');
if($_POST["query"] != '') {
    $search_array = explode(",", $_POST["query"]); 
    $search_text = "'" . implode("', '", $search_array) . "'";
    $query = $conn->query("SELECT * FROM item WHERE nama IN (".$search_text.") ORDER BY id DESC");
}else{
    $query = $conn->query("SELECT * FROM item ORDER BY nama DESC");
}
$total_row = mysqli_num_rows($query);
$output = '';
if($total_row > 0)
$i= 1;
   while ($row = $query ->fetch_object()) {
        $output .= '
        <tr>
            <td ><center>'.$i++.'</center></td>
            <td ><center>'.$row->id.'</center></td>
            <td><center>'.$row->barcode.'</center></td>
            <td>'.$row->nama.'</td>
            <td><center>'.$row->satuan.'</center></td>
            <td><center>'.$row->harga.'</center></td>
        </tr>';
    }
echo $output;
?>