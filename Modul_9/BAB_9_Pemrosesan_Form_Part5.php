<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAB 9: Pemrosesan Form Part 5</title>
</head>
<body>
    <h1 style="text-align: center;">5. Menangani Nilai Check Box</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Hobby
        <input type="checkbox" name="hobby[]" value="Membaca"/>Membaca
        <input type="checkbox" name="hobby[]" value="Olahraga"/>Olahraga
        <input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi
        <input type="submit" value="OK">
    </form>

    <?php
    //ekstraksi nilai
    if (isset($_POST['hobby'])) {
        foreach ($_POST['hobby'] as $key => $val) {
            echo $key . ' -> ' .$val . '<br/>';
        }
    }
    ?>
</body>
</html>