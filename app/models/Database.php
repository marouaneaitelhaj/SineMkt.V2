<?php
class Database
{
    public static $host = 'localhost';
    public static $dbname = 'gestiondesproduits';
    public static $usernamedb = 'root';
    public static $passworddb = '';
    public $conn;
    public  $Username;
    public   $Password;


    public function connect()
    {
        $this->conn = new mysqli(self::$host, self::$usernamedb, self::$passworddb, self::$dbname);
    }

    public function __construct()
    {

        $this->connect();
        $this->Password = mysqli_query($this->conn, "SELECT `Password` FROM admn;");
        $this->Username = mysqli_query($this->conn, "SELECT `Username` FROM admn;");
        // mysqli_query($conn, $this->Username);
    }
}
