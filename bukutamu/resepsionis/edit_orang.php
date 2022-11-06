<?php
session_start();

require '../function.php';

$id = $_GET["id"];
$user = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('Silahkan Login Terlebih Dahulu')
            window.location: '../login/index.php';
        </script>
    ";
}

if(isset($_POST["submit"])){
    if(editOrang($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data User Berhasil Diubah');
            window.location = 'resepsionis.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data User Gagal Diubah');
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
                    <h3>Edit Resepsionis</h3>
            
                    <form action="" method="POST">
                        <input type="hidden" name="id_resepsionis" value="<?= $user["id_resepsionis"]; ?>"><br> 

                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= $user["username"]; ?>"><br>
            
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"><br>
            
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" value="<?= $user["kelas"]; ?>"><br>
            
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $user["password"]; ?>"><br>

                        
                        <label for="roles">Roles</label>
                        <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
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