<?php
date_default_timezone_set('asia/kuala_lumpur');
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $nama_game = htmlspecialchars($_POST["nama_game"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $diskon = htmlspecialchars($_POST["diskon"]);
    $waktu_upload = date("l d-m-y - H:i:s");

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$nama_game.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/'.$gambar_baru)) {
        $sql = "INSERT INTO game VALUES ('','$nama_game','$gambar_baru', '$genre', '$harga', '$diskon', '$waktu_upload')";

        $result = mysqli_query($conn, $sql);

        if ( $result ) {
            echo"
                <script>
                    alert('Data berhasil ditambah');
                    document.location.href = 'menu_crud.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal ditambah');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add_Data</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Link BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6ed6487098.js" crossorigin="anonymous"></script>

</head>
<body>
    <header id="header">
        <div class="nav container">
            <p href="#" class="logo">Game<span><a >shop</a></span></p>

            <div class="wrap">
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="Search..">
                   <button type="submit" class="searchButton"><i class='bx bx-search'></i></button>
                </div>
            </div>
            
            <div  class="navigation">
                <a href="index.php">Home</a>
                <a id="me" onclick="popup()"href="#aboutme">About Me</a>
            </div>
            <div class="darkmode">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="label">
                    <i class='bx bxs-sun' ></i>
                    <i class='bx bxs-moon' ></i>
                    <div class="ball"></div>
                </label>
            </div>
            <script src="main.js"></script>

        </div>
    </header>

    <div class="add-game1">
        <div class="title">Tambah Data Game</div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="tambah">
                <label for="nama_game">JUDUL : </label>
                <input type="text" name="nama_game" class="input" placeholder="Judul..." required>
            </div>
            <div class="tambah">
                <label for="genre">GENRE : </label>
                <input type="text" name="genre" class="input" placeholder="Genre..." required>
            </div>
            <div class="tambah">
                <label for="harga">HARGA : </label>
                <input type="number" name="harga" class="input" placeholder="Harga..." required>
            </div>
            <div class="tambah">
                <label for="diskon">Diskon : </label>
                <input type="number" name="diskon" class="input" placeholder="Diskon..." required>
            </div>
            <div class="tambah">
                <label for="gambar">Pilih Gambar</label>
                <input type="file" name="gambar" class="input" accept="image/*" required>
            </div>
            <div class="button">
                <a href="menu_crud.php">
                    <button type="button" class="button-back">Cancel</button>
                </a>
                <button type="submit" name="tambah" class="button-add">Add</button>
            </div>
        </form>
    </div>
    <div class="footer">
        <p id="footer"><a id="footer1">@Copyright 2022 - by Dhimas Eko</a></p>
    </div>
</body>
</html>