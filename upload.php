<?php

require './koneksi.php';

if (isset($_POST['submit'])) {
    if ($_FILES['gambar']['name'] != "") {
        # code...
        $nama_gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $dest = './img/upload/';
    
        $result = mysqli_query($conn, "INSERT INTO `gambar`  VALUES (NULL, '$nama_gambar')");    
        
        move_uploaded_file($tmp, $dest.$nama_gambar);
        if ($result) {
            echo "<script>alert('berhasil upload foto')</script>";
        }
    }

    // var_dump($_FILES['gambar']['name']);
    // die();
    // $gambar = $_FILES['TMP'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/navbar/pinterest-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pinterest - Héctor</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-combo-items">
            <div class="nav-item logo">
                <img src="./img/navbar/pinterest-icon.png">
            </div>
            <div class="nav-item btn-home">
                <a href="index.php">Home
                    <span class="home_active"><img src="./img/navbar/arrow-down.png"></span>
                </a>
            </div>
            <div class="nav-item btn-today">
                <a href="#">Today</a>
            </div>
        </div>
        <div class="nav-combo-items container-search">
            <div class="nav-item input-search">
                <div class="search-int">
                    <img src="./img/navbar/search-icon.png">
                </div>
                <div class="search-input">
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
        <div class="nav-combo-items">
        <div class="nav-item btn-notificaciones">
                <a href="./upload.php">
                    <img src="./img/icons/iconmonstr-plus-2-240.png"  alt="Notificaciones">
                </a>
            </div>
            <div class="nav-item btn-mensajes">
                <img src="./img/navbar/message-icon.png" alt="Mensajes">
            </div>
            <div class="nav-item btn-avatar">
                <img src="./img/navbar/user-avatar.png" alt="Avatar">
            </div>
            <div class="nav-item btn-opciones">
                <img src="./img/navbar/arrow-down.png" alt="Opciones">
            </div>
        </div>
    </nav>

    <main>
        <div class="upload">
            <form action="" enctype="multipart/form-data" method="post" style="
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 15px;
            ">
                <div class="plus-upload">
                    <label for="up" class="up">
                        <img src="./img/icons/iconmonstr-plus-2-240.png" alt="">
                    </label>
                    <input type="file" id="up" name="gambar" style="display: none;">
                </div>
                <!-- <div class="btn-submit"></div> -->
                <input type="submit" name="submit" value="upload" style="
                    width: 144px;
                    height: 36px;
                ">
            </form>
        </div>
    </main>
</body>
</html>