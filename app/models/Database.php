<?php
class Database
{
    public static $host = 'localhost';
    public static $dbname = 'gestiondesproduits';
    public static $username = 'root';
    public static $password = '';

    public  static $conn;

    public function connect()
    {
        self::$conn = new mysqli(self::$host, self::$username, self::$password, self::$dbname);
    }
    
}
