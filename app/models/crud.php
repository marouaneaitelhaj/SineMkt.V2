<?php

use LDAP\Result;

class crud extends Database{
    public $query;
    public function addProduct($value1, $value2, $value3, $value4)
    {
        $sql = "INSERT INTO product (productName, productPrice, productPic, productCategory) VALUES ('$value1', '$value2', '$value3', '$value4');";
        mysqli_query($this->conn, $sql);
    } 
    public function updateProduct($value1, $value2, $value3, $value4, $value)
    {
        $sql = "UPDATE `product` SET `productName`='$value1',`productPrice`='$value2',`productPic`='$value4',`productCategory`='$value3' WHERE productId = '$value';";
        mysqli_query($this->conn, $sql);
        var_dump($sql);
    }
    public function updateProductnopic($value1, $value2, $value3, $value)
    {
        $sql = "UPDATE `product` SET `productName`='$value1',`productPrice`='$value2',`productCategory`='$value3' WHERE productId = '$value';";
        mysqli_query($this->conn, $sql);
        var_dump($sql);
    }
    public function deleteProduct($value)
    {
        $sql = "DELETE FROM product WHERE productId=$value";
        mysqli_query($this->conn, $sql);
    }
    public function readProduct(){
        // $sql = ("SELECT * FROM product");
        $this->query = mysqli_query($this->conn, 'SELECT * FROM product');

    }
    public function updateReadProduct($value){
        // $sql = ("SELECT * FROM product");
        $this->query = mysqli_query($this->conn, "SELECT * FROM `product` WHERE productId = $value;");
    }
    public function __destruct()
    {
        if(!headers_sent()){
            header('location: http://localhost/OOP-PHP/public/home');
        }
    }
}