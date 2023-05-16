<?php
    $value1 = 'Kyrie';
    $value2 = 'Kyrie Irving';
    setcookie('username', $value1);
    setcookie('nama_lengkap', $value2, time()+3600);
    echo
        "<h2>
            Ini halaman untuk set cookie
        </h2>";
    echo
        "<h2>
            Klik <a href='BAB_10_memeriksaCookies.php'>disini </a> untuk mengecek cookies.
        </h2>"
?>