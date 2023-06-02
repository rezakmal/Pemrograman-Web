<?php
    include 'koneksi.php';

    $judul = $_POST['judul'];
    $jenis = $_POST['jenis'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $halaman = $_POST['halaman'];

    mysqli_query($koneksi, "UPDATE data_buku SET jenis='$jenis', penulis='$penulis', penerbit='$penerbit', tahun='$tahun', halaman='$halaman' WHERE judul='$judul'");

    header("location:loginMain.php?pesan=update");
?>