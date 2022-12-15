<?php
class deleteproduct extends controller
{
    public function __construct()
    {
        
        $this->model('Database');
        $add = $this->model('crud');
        $add->deleteProduct($_GET['id']);
    }
}
