<?php
require '../function.php';

$id = $_GET["id"];

    if(hapusOrang($id) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Gagal Dihapus');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Berhasil Dihapus');
            window.location = 'resepsionis.php';
        </script>
    ";
    }

?>