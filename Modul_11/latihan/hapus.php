<?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");

    if($query){
        header("location:full.php?pesan=hapus");
    }else{
        header("location:full.php?pesan=gagal");
    }
?>