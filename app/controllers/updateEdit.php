<?php
class updateEdit extends controller
{
    public function __construct()
    {
        
        $this->model('Database');
        $read = $this->model('crud');
        $this->view('editformProduct');
        $read->updateReadProduct($_GET['id']);
        foreach($read->query as $arr){
            $this->view('editformProduct', ['id' => "xxx"]);
        }
        // 
        // $this->model('Database');
        // $add = $this->model('crud');
        // $add->updateProduct();
    }
}
