<?php
require '../koneksi.php';
$profil = mysqli_query($conn, "SELECT foto FROM gtk")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header{
            width: 300px;
            background-color: black;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            padding: 0 15px;
            overflow-y: auto;
        }

        header .profile img{
            width: 120px;
            margin: 15px auto;
            border: 8px solid #2c2f3f;
            display: block;
        }


        header .profile h1{
            font-size: 24px;
            margin: 0;
            padding: 0;
            font-weight: 600;
            text-align: center;
            font-family: sans-serif;
        }
        header .profile .social-links a{
            font-size: 30px;
            display: inline-block;
            background-color: #2c2f3f;
            color: white;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            margin-top: 70px;
            border-radius: 50px;
            text-align: center;
            width: 46px;
            height: 46px;
        }

        .nav-menu{
            padding: 30px 0 0 0;
        }

        .nav-menu *{
            margin: 0;
            padding: 0;
            list-style: 0;
        }

        .nav-menu a{
            display: flex;
            align-items: center;
            color: rgb(166, 166, 166);
            padding: 12px 15px;
            margin-bottom: 8px;
            transition: 0.3s;
            font-size: 15px;
            text-decoration: none;
        }

        .nav-menu a:hover{
            text-decoration: none;
            color: white;
        }

        .nav-menu a i{
            font-size: 30px;
            padding-right: 8px;
        }
    </style>
</head>
<body>
    <header>
        <div class="profile">
                    
                    
                    <div class="social-links text-center mt-3">
                        <a href="#" id="links" onClick="alert('belum ada link nya ; (')" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" id="links" onClick="alert('belum ada link nya ; (')" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" id="links" onClick="alert('belum ada link nya ; (')" class="linnkediin"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" id="links" onClick="alert('belum ada link nya ; (')" class="github"><i class="fa-brands fa-github"></i></a>
                        <a href="#" id="links" onClick="alert('belum ada link nya ; (')" class="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                    </div>  
                </div>

                <div class="nav-menu navbar">
                    <ul>
                        <li><a href="../home/home.php"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="../resepsionis/resepsionis.php"><i class="fa-solid fa-user"></i> Resepsionis</a></li>
                        <li><a href="../gtk/gtk.php"><i class="fa-solid fa-file"></i> GTK</a></li>

                    </ul>
                </div>
        </header>
    <script src="script.js"></script>
</body>
</html>