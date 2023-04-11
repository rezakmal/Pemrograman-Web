<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 8</title>
</head>
<body>
    <?php
    //----------1. Program PHP----------
    ?>
    <?php
    echo 'Kode PHP disini';
    //.....
    ?>
    <p>Dokumen HTML</p>


    <?php
    //----------2. Variabel----------
    //deklarasi dan inisialisasi
    $bil = 3;
    echo $bil;
    ?>

    <?php
    //-----> memanfaatkan fungsi var_dump() atau print_r()
    //deklarasi dan inisialisasi
    $bil = 3;
    //dumping informasi mengenai variabel
    var_dump($bil);
    print_r($bil);
    ?>

    <?php
    $bil = 3;
    var_dump($bil);
    //output: int(3)

    $var = "";
    var_dump($var);
    //output: string(0)

    $var = null;
    var_dump($var);
    //output: NULL
    ?>


    <?php
    //3. Tipe Data dan Casting
    $bil = 3;
    var_dump(is_int($bil));
    //output: bool(true)

    $var = "";
    var_dump(is_string($var));
    //output: bool(true)
    ?>

    <?php
    //-----> casting
    $str = '123abc';
    //casting nilai variabel $str ke integer
    $bil = (int) $str; //$bil = 123

    echo gettype($str);
    //output: string

    echo gettype($bil);
    //output: integer
    ?>


    <?php
    //----------4. Pernyataan Seleksi----------
    //-----> pernyataan if
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo 'a lebih besar dari b';
    }
    ?>

    <?php
    //----->pernyataan if-else
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo 'a lebih besar dari b';
    } else {
        echo 'a TIDAK lebih besar dari b';
    }
    ?>

    <?php
    //-----> pernyataan if-elseif
    $a = 10;
    $b = 5;
    if ($a > $b) {
        echo 'a lebih besar dari b';
    } elseif ($a == $b) {
        echo 'a sama dengan b';
    } else {
        echo 'a kurang dari dari b';
    }
    ?>

    <?php
    //-----> pernyataan switch
    $i = 0;

    if ($i == 0) {
        echo "i equals 0";
    } elseif ($i == 1) {
        echo "i equals 1";
    } elseif ($i == 2) {
        echo "i equals 2";
    }
    //ekuivalen, dengan pendekatan switch
    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }
    ?>


    <?php
    //----------5. Pengulangan----------
    //---> pengulangan while
    $i = 0;
    while ($i < 10) {
        echo $i;
        //inkremen counter
        $i++;
    }
    ?>

    <?php
    //---> pengulangan do-while
    $i = 0;
    do {
        echo $i;
        //inkremen counter
        $i++;
    } while ($i < 10);
    ?>

    <?php
    //---> pengulangan for
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    ?>

    <?php
    //---> pengulangan foreach
    $arr = array(1, 2, 3, 4);
    foreach ($arr as $value) {
        echo $value;
    }
    ?>


    <?php
    //----------6. Fungsi dan Prosedur----------
    //definisi fungsi/prosedur
    //contoh prosedur
    function do_print() {
        //mencetak informasi timestamp
        echo time();
    }
    //memanggil prosedur
    do_print();
    echo '<br/>';
    //contoh fungsi penjumlahan
    function jumlah($a, $b) {
        return($a + $b);
    }
    echo jumlah(2, 3);
    //output: 5
    ?>

    <?php
    //argumen fungsi/prosedur
    /**
     * mencetak string
     * $teks nilai string
     * $bold adalah argumen opsional
     */
    function print_teks($teks, $bold = true) {
        echo $bold ? '<b>' .$teks.'</b>' : $teks;
    }
    print_teks('Indonesiaku');
    //menetak dengan huruf tebal

    print_teks('Indonesiaku', false);
    //mencetak dengan huruf reguler
    ?>
</body>
</html>