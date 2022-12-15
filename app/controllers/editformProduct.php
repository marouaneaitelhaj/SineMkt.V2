<?php
class editformProduct extends controller
{
    public function __construct()
    {
        $this->model('Database');
        $read = $this->model('crud');
        $read->updateReadProduct($_GET['id']);
        $query = $read->query;
        $this->view('editformProduct', ['query' => $query]);
        $this->view('editformProduct');
        if(isset($_POST['btn'])){
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["productPic"]["name"]);
        move_uploaded_file($_FILES["productPic"]["tmp_name"], $target_file);
        $update = $this->model('crud');
        $update->updateProduct($_POST['productName'], $_POST['productPrice'], $_POST['productCategory'], $_FILES["productPic"]["name"], $_GET['id']);
        }
    }
}
