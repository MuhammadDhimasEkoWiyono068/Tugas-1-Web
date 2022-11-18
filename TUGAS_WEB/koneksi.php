<?php 
    $conn = mysqli_connect("localhost", "root", "", "gameshop");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>