<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
    //Soal 1
    echo "<h3> Soal No 1</h3>";
    $first_sentence = "Hello PHP!"; // Panjang string 10, jumlah kata: 2
    $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
    echo "Kalimat Pertama: " . $first_sentence . "<br>";
    echo "Panjang string: " . strlen($first_sentence) . ", jumlah kata : " . str_word_count($first_sentence) . "<br>";
    echo "Kalimat Kedua: " . $second_sentence . "<br>";
    echo "Panjang string: " . strlen($second_sentence) . ", jumlah kata : " . str_word_count($second_sentence);

    //Soal 2
    echo "<h3> Soal No 2</h3>";
    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
    // Lanjutkan di bawah ini
    echo "Kata kedua: " . substr($string2, 2, 5) . "<br>";
    echo "Kata Ketiga: " . substr($string2, 6, 9) . "<br>";

    //Soal 3
    echo "<h3> Soal No 3 </h3>";
    $string3 = "PHP is old but sexy!";
    echo "String: " . $string3 . "<br>";
    echo "Ganti Kalimat: " . str_replace("sexy", "awesome", $string3);
    // OUTPUT : "PHP is old but awesome"
    ?>
</body>

</html>