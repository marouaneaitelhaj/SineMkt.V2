<?php
class crud extends Database{
    public function addProduct($value1, $value2, $value3, $value4)
    {
        $sql = "INSERT INTO product (productName, productPrice, productPic, productCategory) VALUES ('$value1', '$value2', '$value3', '$value4');";
        mysqli_query($this->conn, $sql);
    }
    public function updateProduct($value1, $value2, $value3, $value4, $value)
    {
        $sql = "UPDATE product SET productName = $value1, productPrice = $value2,productPic = $value3, productCategory = $value4 WHERE productName=$value; ";
        mysqli_query($this->conn, $sql);
    }
    public function deleteProduct($value)
    {
        $sql = "DELETE FROM product WHERE productName=$value";
        mysqli_query($this->conn, $sql);
    }
}