<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAB 9: Pemrosesan Form Part 3</title>
</head>
<body>
    <h1 style="text-align: center;">3. Menangani Radio Button</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">Jenis Kelamin
        <input type="radio" name="sex" value="Pria"/> Pria
        <input type="radio" name="sex" value="Wanita"/> Wanita <br>
        <input type="submit" value="OK">
    </form>

    <?php
    if (isset($_POST['sex'])) {
        echo $_POST['sex'];
    }
    //----------------------------------------------------------------------------------
    ?>

    <h2>-> Latihan Kecil: Prefilling Radio Button</h2>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">Jenis Kelamin
        <input type="radio" name="sex" value="Pria" checked
        <?php
        if ($_POST['sex'] == 'Pria') {
            echo 'checked="checked"';
        }
        ?>
        />Pria
        <input type="radio" name="sex" value="Wanita"
        <?php
        if ($_POST['sex'] == 'Wanita') {
            echo 'checked="checked"';
        }
        ?>
        />Wanita <br>
        <input type="submit" value="OK"/>
    </form>

    <?php
    if (isset($_POST['sex'])) {
        echo $_POST['sex'];
    }
    ?>
</body>
</html>