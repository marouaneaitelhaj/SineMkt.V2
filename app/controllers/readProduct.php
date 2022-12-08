<?php
class readProduct extends controller{
    public function __construct()
    {
        $this->model('Database');
        $add = $this->model('crud');
        $add->readProduct();
    }
}