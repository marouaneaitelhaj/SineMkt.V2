<?php
class runDatabase extends controller{
    public function __construct()
    {
        $conn = $this->model('Database');
        $conn::connect();
    }
}