<?php
include "koneksi.php";

$judul = $_POST['judul'];
$jenis = $_POST['jenis'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$halaman = $_POST['halaman'];

$query = mysqli_query($koneksi, "INSERT INTO data_buku (judul, jenis, penulis, penerbit, tahun, halaman)
VALUES ('$judul', '$jenis', '$penulis', '$penerbit', '$tahun', '$halaman')");

if($query){
    header("location: loginMain.php");
}else{
    echo "gagal";
}