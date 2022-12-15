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
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        
            $check = getimagesize($_FILES["productPic"]["tmp_name"]);
            if ($check !== false) {
                
                $uploadOk = 1;
            } else {
                
                $uploadOk = 0;
            }

        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["productPic"]["size"] > 500000) {
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["productPic"]["tmp_name"], $target_file)) {
            } else {
            }
        }
        $update = $this->model('crud');
        $update->updateProduct($_POST['productName'], $_POST['productPrice'], $_POST['productCategory'], $_FILES["productPic"]["name"], $_GET['id']);
        }
    }
}
