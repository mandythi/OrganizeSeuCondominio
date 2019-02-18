<?php

    namespace app\models;

    use PDO;

    class Connection
    {
        public static function connect(){

            $pdo = new PDO("mysql:host=localhost;dbname=ajax", "root", "");
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); //Chama atributos como objetos

            return $pdo;

        }

    }