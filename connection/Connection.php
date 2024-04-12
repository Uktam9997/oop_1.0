<?php



class conection
{
    public static function make() {
        $pdo = new PDO("mysql:host=localhost;dbname=oop;", "root", "");
        return $pdo;
    }
}

  


