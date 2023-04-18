<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAB 9: Pemrosesan Form Part 1</title>
</head>
<body>
    <h1 style="text-align: center;">1. Menangani Masukan Data</h1>
    <?php
    //-----> metode GET <-----
    ?>
    <h2>-- metode GET</h2>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> Nama
        <input type="text" name="nama"/> <br>
        <input type="submit" value="OK"/>
    </form>

    <?php
    if (isset($_GET['nama'])) {
        echo 'Hello, ' . $_GET['nama'];
    }
    ?>

    <?php
    //--------------------------------------------------------------------
    //-----> metode POST <-----
    ?>
    <h2>-- metode POST</h2>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Nama
        <input type="text" name="nama"/> <br>
        <input type="submit" value="OK"/>
    </form>
    
    <?php
    if (isset($_POST['nama'])) {
        echo 'Hello, ' . $_POST['nama'];
    }
    ?>

    <?php
    //--------------------------------------------------------------------
    //-----> identifikasi metode
    ?>
    <h2>-- identifikasi metode</h2>
    <?php
    if (isset($_REQUEST['nama'])) {
        echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
    }
    ?>
</body>
</html>