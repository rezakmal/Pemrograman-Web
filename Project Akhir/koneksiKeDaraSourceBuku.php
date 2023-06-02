<?php
    $db_con = mysqli_connect('localhost', 'root', '', 'project_buku')
    or die ('koneksi gagal');
?>

<!DOCTYPE html>
<html lang="id">
<?php
    include("koneksiBuku.php")
?>
<head>
    <title>Tes Koneksi</title>
</head>
<body>
    <h4>Koneksi Berhasil</h4>
</body>
</html>