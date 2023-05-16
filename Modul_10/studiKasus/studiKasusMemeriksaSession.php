<?php
    session_start();
    if (isset($_SESSION['login'])) { //jika login sudah berhasil maka menampilkan isi session
        echo "<h1>Selamat datang, ". $_SESSION['login'] ."</h1>";
        echo "<h2>Halaman ini bisa tampil jika berhasil login. Ini adalah HOME kamu.</h2>";
        echo "<h2>Klik <a href='studiKasusMenghapusSession.php'>disini </a> untuk logout </h2>";
    } else {
        //session tidak muncul karena belum login atau belum berhasil login
        die ("Anda belum login! Login dulu <a href='studiKasusMembuatSession.php'>disini</a>");
    }
?>