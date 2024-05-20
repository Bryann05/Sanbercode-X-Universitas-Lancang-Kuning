<?php

require_once('frog.php');

class Ape extends Frog
{
    public $legs = 2;

    public function yell()
    {
        echo "Yell : Auooo";
    }
}