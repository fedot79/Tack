<?php

echo '<br>'."файл DB подключен";

class DB {

    const USER = "root";
    const PASS = "";
    const HOST = "localhost";
    const DB = "tacker";

    public static function connToDb(){
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host",$user,$pass);
        return $conn;
    }
}