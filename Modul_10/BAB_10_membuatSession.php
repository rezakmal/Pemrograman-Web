<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        //periksa login
            if ($user == "Kyrie" && $pass == "123") {
                //menciptakan session
                $_SESSION['login'] = $user;
                //menuju ke halaman pemeriksaan section
                echo "<h1>Halo, kamu berhasil login!</h1>";
                echo "<h2>Klik <a href='BAB_10_memeriksaSession.php'>disini</a> untuk
                menuju ke halaman pemeriksaan session</h2>";
            } //bisa ditambahkan kondisi jika gagal login disini
    }
    else {
        ?>
        <html>
            <head>
                <title>Login Disini</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Login Disini</h2>
                    Username : <input type="text" name="user"> <br>
                    Password : <input type="password" name="pass"> <br>
                    <input type="submit" name="login" value="login">
                </form>
            </body>
        </html>
        <?php
    }
?>