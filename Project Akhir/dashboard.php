<?php
    include("koneksi.php");

    if (isset($_POST['tambah_data'])) {
        $judul = $_POST['judul'];
        $jenis = $_POST['jenis'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $halaman = $_POST['halaman'];

        $query = mysqli_query($koneksi, "INSERT INTO buku_data (judul, jenis, penulis, penerbit, tahun, halaman)
        VALUES ('$judul', '$jenis', '$penulis', '$penerbit', '$tahun', '$halaman')");

        if ($query) {
            header("location: dashboard.php");
        } else {
            echo "gagal Menambah Data!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</head>

<style>
    .content.w-75 {
        align-items: center;
        justify-content: center;
        color: red;
    }

    body {
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        float: none;
    }
</style>

<body>
    <div class="tambah-data w-50">
        <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Judul Buku</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Jenis</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Penulis</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Penerbit</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Tahun</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Jumlah Halaman</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" />
        </div>

        <button type="submit" class="btn btn-warning" name="tambah_data" style="margin-bottom: 20px;" >TAMBAH</button>
        </form>
    </div>

    <div class="content w-75" style="align-items: center; justify-content: center";>
        <form action="update.php" method="post">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Jenis</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Jumlah Halaman</th>
                    <th>Menu</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from buku_data");
                while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['judul']; ?></td>
                        <td><?php echo $d['jenis']; ?></td>
                        <td><?php echo $d['penulis']; ?></td>
                        <td><?php echo $d['penerbit']; ?></td>
                        <td><?php echo $d['tahun']; ?></td>
                        <td><?php echo $d['halaman']; ?></td>
                        <td>
                            <a href="lihat.php?nim=<?php echo $d['judul']; ?>">Lihat</a>
                            <a href="edit.php?nim=<?php echo $d['judul']; ?>">Edit</a>
                            <a href="hapus.php?nim=<?php echo $d['judul']; ?>" onclick="return confirmDelete()">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </thead>
        </table>
        </form>
    </div>
</body>
</html>