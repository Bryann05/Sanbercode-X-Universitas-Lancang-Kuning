<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Looping</title>
</head>

<body>
    <h1>Berlatih Looping</h1>

    <?php
    //Soal 1
    echo "<h2>Soal No 1 Looping I Love PHP</h2>";
    echo "<h3>Looping Pertama</h3>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo $i . " - I Love PHP <br>";
    }
    echo "<h3>Looping Kedua</h3>";
    for ($a = 20; $a >= 2; $a -= 2) {
        echo $a . " - I Love PHP <br>";
    }
    //Soal 2
    echo "<h2>Soal No 2 Looping Array Modulo</h2>";
    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);
    echo "<br>";
    echo "Array sisa baginya adalah:  ";
    foreach ($numbers as $value) {
        $rest[] = $value % 5;
    }
    print_r($rest);
    echo "<br>";
    //Soal 3
    echo "<h2> Soal No 3 Looping Asociative Array </h2>";
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];
    foreach ($items as $key => $value) {
        $hasil = array(
            'id' => $value[0],
            'name' => $value[1],
            'price' => $value[2],
            'description' => $value[3],
            'source' => $value[4],
        );
        print_r($hasil);
        echo "<br>";
    }
    //Soal 4
    echo "<h2>Soal No 4 Asterix </h2>";
    for ($b = 1; $b <= 5; $b++) {
        for ($c = 1; $c <= $b; $c++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>

</html>