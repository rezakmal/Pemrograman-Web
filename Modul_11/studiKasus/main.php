<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDI KASUS</title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!--latest compiled JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });

        function confirmDelete() {
            return confirm("Apakah anda yakin ingin menghapus data?");
        }
    </script>
</head>
<body>

<style>
    body {
    /* background-image:url(https://assets.nflxext.com/ffe/siteui/vlv3/2e884ce2-da1c-4501-ab9a-10c534d30975/ee5c836d-3a48-48cd-9896-2d14c0acc31c/ID-en-20230327-popsignuptwoweeks-perspective_alpha_website_large.jpg); */
    background-color: rgba(0, 0, 0, 0.75);
    margin: auto;
    width: auto;
    min-height: 100vh;
    background-position: center;
    background-size: cover;
    /* color: white; */
    }

    .login{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: rgba(0, 0, 0, 0.5); */
    }

    .login-content {
        padding: 20px 70px;
        width: 35%;
        height: 68%;
        margin: auto;
        background-color: rgba(0, 0, 0, 0.75);
        border-radius: 5px;
    }

    .form-group .col-sm-12 .form-control {
        height: 50px;
        background-color: #333;
        border: none;
    }

    .form-group .btn-default {
        height: 50px;
        margin-top: 25px;
        width: 100%;
        color: white;
        background-color: red;
        border: none;
    }

    .panel-default {
        position: absolute;
        justify-content: center;
        align-items: center;
        margin-top: 800px;
        background-color: rgba(0, 0, 0, 0.75);
    }

    .panel-heading {
        background-color: rgba(0, 0, 0, 0.75);
        color: white;
    }

    .panel-default>.panel-heading {
        border-color: #333;
    }
</style>

<div class="login">
    <div class="login-content" style="color: white;">
        <h2>Input Data</h2>
        <form class="form-horizontal" name="myForm" method="post" action="tambah_aksi_full.php">
            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                    <input type="number" class="form-control" placeholder="NIM" name="nim">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </div>

    <div class="panel panel-default" style="border-color: #333">
    <!-- Default panel contents -->
        <div class="panel-heading" style="color: white; background-color: #333">
            Daftar Mahasiswa
        </div>
        <table class="table" style="color: white; background-color: #333">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Menu</th>    
            </tr>
            <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from mahasiswa");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td>
                            <a href="lihat.php?nim=<?php echo $d['nim']; ?>">Lihat</a>
                            <a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
                            <a href="hapus.php?nim=<?php echo $d['nim']; ?>" onclick="return confirmDelete()">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
        </table>
    </div>
</div>
</body>
</html>