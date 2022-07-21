<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>UAS</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
        <script src="jquery.PrintArea.js"></script>
         
    </head>
    <body>
        <div class="container">
            <br />
        <br>
            <h2 align="center">DATA BARANG</h2><br/>
            <a href="index.php"> <button class="btn btn-outline-warning">PRINT</button></a>
        <input type="hidden" name="id" id="id" />
            <div style="clear:both"></div>
            <br />
            <div class="table-responsive" >
                <table class="table table-warning table-striped table-bordered">
                   <thead >
                         <tr>
                          <th ><center>No</center></th>
                            <th><center>Id</center></th>
                            <th><center>Barcode</center></th>
                            <th><center>Nama</center></th>
                            <th><center>Satuan</center></th>
                            <th><center>Harga</center></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                </form>
            </div>
<script>
$(document).ready(function(){
    load_data();
    function load_data(query='')
    {
        $.ajax({
            url:("item_data.php"),
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $("#cetak").bind("click", function(event) {
                        $('.table-responsive').printArea();
                    })
                $('tbody').html(data);
            }
        })
    }

    
});
</script>

</body>
</html>