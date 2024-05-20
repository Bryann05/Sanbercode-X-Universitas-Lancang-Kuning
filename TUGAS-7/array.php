<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    //Soal 1
    echo "<h3> Soal 1 </h3>";
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
    $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    echo "Kids: ";
    print_r($kids);
    echo "<br> Adults: ";
    print_r($adults);

    //Soal 2
    echo "<h3> Soal 2</h3>";
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
    echo "</ol>";

    //Soal 3
    echo "<h3> Soal 3</h3>";
    $biodata = [
        ["Name" => "Will Byers", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"],
        ["Name" => "Mike Wheeler", "Age" => 12, "Aliases" => "Dungeon Master", "Status" => "Alive"],
        ["Name" => "Jim Hopper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Deceased"],
        ["Name" => "Eleven", "Age" => 12, "Aliases" => "El", "Status" => "Alive"],
    ];

    echo "<pre>";
    print_r($biodata);
    echo "</pre>";
    ?>
</body>

</html>