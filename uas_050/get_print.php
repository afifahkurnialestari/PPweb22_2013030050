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
{
   
   while ($row = $query ->fetch_object()) {    
    $output.= '
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="offer offer-warning">
                <div class="offer-content">
                    <h3 class="lead">'.$row->nama.' <br> Rp. '.$row->harga.'</h3>                        
                    <p>
                        <small> '.$row->satuan.' <br> '.$row->barcode.'
                        </small>
                    </p>
                </div>
            </div>
        </div>';
    }
   
    
}else{
    $output .= '
    <tr>
        <td colspan="5" align="center">No Data Found</td>
    </tr>
    ';
}
echo $output;
?>