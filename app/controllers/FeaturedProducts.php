<?php
class FeaturedProducts extends controller{
public function __construct()
    {
        $this->model('Database');
        $read = $this->model('crud');
        $read->readProduct();
        $query = $read->query;
        $this->view('FeaturedProducts', ['query' => $query]);
    }
}