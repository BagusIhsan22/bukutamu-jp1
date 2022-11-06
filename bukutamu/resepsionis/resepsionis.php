<?php
require '../function.php';
$datas = query("SELECT * FROM resepsionis")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punya Ihsannn</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <?php require '../navbar/navbar.php'; ?>
        </div>
        <div class="col-9">
                <div class="container mt-5">
                <h1>Data Resepsionis</h1>
                <a href="tambah_orang.php" class="btn btn-primary">Tambah Orang</a>
                
                <table>
                    <tr>
                        <th>NO</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Roles</th>
                        <th>Aksi</th>
                    </tr>
                    
                    <?php $i = 1; ?>
                    <?php foreach($datas as $data) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $data["username"] ?></td>
                            <td><?= $data["nama_lengkap"] ?></td>
                            <td><?= $data["kelas"] ?></td>
                            <td><?= $data["roles"] ?></td>
                            <td>
                                <a href="edit_orang.php?id=<?= $data["id_resepsionis"]; ?>" class="edit"><i class="fa-solid fa-user-pen"></i></a>
                                <a href="hapus_orang.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus"  onClick="return confirm('Anda Yakin Ingin Menghapus?')" ><i class="fa-solid fa-trash"></i></a>
                            </td>                
                        </tr>
                    <?php $i++;?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        
    </div>
    

</body>
</html>