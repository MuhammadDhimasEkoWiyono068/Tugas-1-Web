<?php
date_default_timezone_set('asia/kuala_lumpur');
require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM game WHERE id=$id");

$game = [];

while ($row = mysqli_fetch_assoc($result)) {
    $game[] = $row;
}

$gme = $game[0];




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
        $sql = "UPDATE game SET
            nama_game = '$nama_game',
            file_gambar = '$gambar_baru',
            genre = '$genre',
            harga = '$harga',
            diskon = '$diskon',
            waktu_upload = '$waktu_upload'
            WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if ( $result ) {
            echo"
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = 'menu_crud.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal diubah');
                    document.location.href = 'edit.php';
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
    <title>Update</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- Link BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6ed6487098.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="header">
        <div class="nav container">
        <p href="#" class="logo">Game<span><a>shop</a></span><span><x> For Admin</x></span></p>

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

    <div class="add-game2">
        <div class="title">Edit Data Game</div>
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="tambah">
                <label for="nama_game">Judul : </label>
                <input type="text" name="nama_game" class="input" value="<?php echo $gme["nama_game"]; ?>" >
            </div>
            <div class="tambah">
                <label for="genre">Genre : </label>
                <input type="text" name="genre" class="input" value="<?php echo $gme["genre"]; ?>">
            </div>
            <div class="tambah">
                <label for="harga">Harga : </label>
                <input type="number" name="harga" class="input" value="<?php echo $gme["harga"]; ?>">
            </div>
            <div class="tambah">
                <label for="diskon">Diskon : </label>
                <input type="number" name="diskon" class="input" value="<?php echo $gme["diskon"]; ?>">
            </div>
            <div class="tambah">
                <label for="gambar">Pilih Gambar</label>
                <input type="file" name="gambar" class="input" accept="image/*" value="<?php echo $gme["nama_game"]; ?>">
            </div>
            <div class="button">
                <a href="menu_crud.php">
                    <button type="button" class="button-back">Cancel</button>
                </a>
                <button type="submit" name="tambah" class="button-add">Change</button>
            </div>
        </form>
    </div>
    <div class="footer">
        <p id="footer"><a id="footer1">@Copyright 2022 - by Dhimas Eko</a></p>
    </div>
</body>
</html>