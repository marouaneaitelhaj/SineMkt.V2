<?php
class Authentication extends Database{
    public static $Username = mysqli_query($this->conn, "SELECT `Username` FROM `admin`;");
    public  static $Password = mysqli_query($this->conn, "SELECT `Password` FROM `admin`;");
    public function Authentication($value1,$value2){
        if($value1 == self::$Username[0] and $value2 == self::$Password[0]){
            echo "yahh";
        }
    }
}