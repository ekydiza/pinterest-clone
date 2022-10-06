<?php
require './koneksi.php';


$result = mysqli_query($conn, "SELECT * FROM gambar"); 


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
                <a href="#">Home
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
    <main class="galery">
        <?php while($row = mysqli_fetch_assoc($result)):?>
        <!-- CARD -->
        <div class="card">
            <img src="./img/upload/<?= $row['gambar']?>">
            <div class="container-hover">
                <div class="row-top">
                    <div class="container-btn-save">
                        <a class="btn-save" href="#">Save</a>
                    </div>
                </div>
                <div class="row-bottom">
                    <div class="container-bottom-btns">
                        <a href="#" class="a-share-btn">
                            <img src="./img/cards-buttons/share-icon.png" alt="share icon">
                        </a>
                    </div>
                    <div class="container-bottom-btns">
                        <a href="#" class="a-more-btn">
                            <img src="./img/cards-buttons/more-icon.png" alt="more icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--  ********************************** END CARD ********************************************-->
        <?php endwhile?>
    </main>
</body>
</html>