<?php

require('animal.php');
require('frog.php');
require('ape.php');

echo "<h3>RELEASE 0</h3>";

// Sheep
$sheep = new Animal("shaun");

echo "Name :   $sheep->name  <br>"; // "shaun"
echo "legs :  $sheep->legs  <br>"; // 4
echo "cold blooded :  $sheep->cold_blooded <br> <br>"; // "no"

echo "<h3>RELEASE 1</h3>";

// Frog
$kodok = new Frog("buduk");

echo "Name :   $kodok->name  <br>"; // "shaun"
echo "legs :  $kodok->legs  <br>"; // 4
echo "cold blooded :  $kodok->cold_blooded <br>"; // "no"
echo  $kodok->jump() . "<br>" . "<br>";

// Ape
$sunggokong = new Ape("kera sakti");

echo "Name :   $sunggokong->name <br>"; // "shaun"
echo "legs :  $sunggokong->legs <br>"; // 4
echo "cold blooded :  $sunggokong->cold_blooded <br>"; // "no"
echo  $sunggokong->yell() . "<br>" . "<br>";