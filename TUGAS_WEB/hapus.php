<?php 
require 'koneksi.php';

$id = $_GET['id'];

$hapus_data = mysqli_query($conn,
                  "SELECT * FROM game WHERE id = '$id'");
$row = mysqli_fetch_array($hapus_data);

$gambar = $row['file_gambar'];
$hapus = "img/$gambar";

if(file_exists($hapus))
{
    unlink($hapus);
}

$result = mysqli_query($conn, "DELETE FROM game WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'menu_crud.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'hapus.php';
        </script>
    ";
}
?>