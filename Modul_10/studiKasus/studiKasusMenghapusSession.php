<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        echo "<h1>Kamu sudah berhasil logout. </h1>";
        echo "<h1>Klik <a href='studiKasusMembuatSession.php'>disini</a> untuk login lagi. <br>
        Kamu tidak bisa masuk ke <a href='studiKasusMemeriksaSession.php'>HOME</a>lagi.</h1>";
    }
?>