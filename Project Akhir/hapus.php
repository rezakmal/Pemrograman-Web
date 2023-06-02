<?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");

    if($query){
        header("location:main.php?pesan=hapus");
    }else{
        header("location:main.php?pesan=gagal");
    }
?>