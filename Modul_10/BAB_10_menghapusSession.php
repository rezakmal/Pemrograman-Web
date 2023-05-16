<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        echo "<h1>Kamu sudah berhasil logout. </h1>";
        echo "<h1>Klik <a href='BAB_10_membuatSession.php'>disini</a> untuk login lagi. <br>
        Kamu tidak bisa masuk ke <a href='BAB_10_memeriksaSession.php'>HOME</a>lagi.</h1>";
    }
?>