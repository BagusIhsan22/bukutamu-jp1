<?php
require '../function.php';

$id = $_GET["id"];

    if(hapusguru($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Gagal Dihapus');
            window.location = 'gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Berhasil Dihapus');
            window.location = 'gtk.php';
        </script>
    ";
    }

?>