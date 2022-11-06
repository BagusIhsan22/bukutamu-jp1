<?php
session_start();
require '../function.php';

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('Silahkan Login Terlebih Dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

if(isset($_POST["submit"])){
    if(tambahOrang($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Prodak User Berhasil Dikirim');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Prodak User Gagal Dikirim');
            window.location = 'resepsionis.php';
        </script>
    ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punya Ihsannn</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <?php require '../navbar/navbar.php'; ?>
        </div>
        <div class="col-8">
            <div class="main mt-5">
                <div class="box">
                    <h3>Tambah Orang</h3><br>
            
                    <form action="" method="POST" enctype="multipart/form-data">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control"><br>
            
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br>
            
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="form-control"><br>
            
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"><br>

                        <label for="roles">Roles</label>
                        <select name="roles" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Resepsionis">Resepsionis</option>
                        </select><br>

                        <button type="submit" name="submit" class="btn btn-dark">Kirim</button>
                    </form>
                </div>
            </div>
        </div>     
    </div>
    
</body>
</html>