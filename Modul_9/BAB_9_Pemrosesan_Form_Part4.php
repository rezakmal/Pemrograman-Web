<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAB 9: Pemrosesan Form Part 4</title>
</head>
<body>
    <h1 style="text-align: center;">4. Menangani Nilai Seleksi</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> Pekerjaan
        <select name="job" id="">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="ABRI">ABRI</option>
            <option value="PNS">PNS</option>
            <option value="Swasta">Swasta</option>
        </select> <br>

        <input type="submit" value="OK">
    </form>

    <?php
    if (isset($_POST['job'])) {
        echo $_POST['job'];
    }
    ?>
</body>
</html>