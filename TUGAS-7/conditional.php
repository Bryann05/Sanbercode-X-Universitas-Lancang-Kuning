<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Conditional Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3> Soal No 1 Greetings </h3>";
    // Soal 1
    function greetings($nama)
    {
        echo "Halo " . $nama . ", Selamat Datang di Sanbercode! <br>";
    }

    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Febrian Mahendra");
    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    //Soal No 2
    function reverse($kata1)
    {
        $panjangKata = strlen($kata1);
        $tampung = "";
        for ($i = ($panjangKata - 1); $i >= 0; $i--) {
            $tampung .=  $kata1[$i];
        }
        return $tampung;
    }
    function reverseString($kata2)
    {
        $string = reverse($kata2);
        echo $string . "<br>";
    }


    // Hapus komentar di bawah ini untuk jalankan Code
    reverseString("Febrian Mahendra");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Developers");
    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";
    //Soal 3
    function palindrome($kataAwal)
    {

        $balik = reverse($kataAwal);
        if ($balik === $kataAwal) {
            echo "$kataAwal => true <br>";
        } else {
            echo "$kataAwal => false <br>";
        }
    }

    // Hapus komentar di bawah ini untuk jalankan code
    palindrome("civic"); // true
    palindrome("nababan"); // true
    palindrome("jambaban"); // false
    palindrome("racecar"); // true

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    //Soal 4
    function tentukan_nilai($angka)
    {
        $output = "";
        if ($angka >= 85 && $angka <= 100) {
            $output .= "Sangat Baik";
        } else if ($angka >= 70 && $angka < 85) {
            $output .= "Baik";
        } else if ($angka >= 60 && $angka < 70) {
            $output .= "Cukup";
        } else {
            $output .= "Kurang";
        }
        return $output . "<br>";
    }

    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo tentukan_nilai(76); //Baik
    echo tentukan_nilai(67); //Cukup
    echo tentukan_nilai(43); //Kurang

    ?>
</body>

</html>