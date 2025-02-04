<?php
class Database
{
    const servername = "localhost";
    const username = "root";
    const password = "";
    const dbname = "moonperfumeshop";

    public static function connect()
    {
        try {
            $pdo = new PDO("mysql:host=" . self::servername . ";dbname=" . self::dbname . ";charset=utf8", self::username, self::password);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}