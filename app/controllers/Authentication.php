<?php
class Authentication extends controller
{
    public function index($value = '')
    {
        echo "jfjfjfj";
        $model = $this->model($value[0]);
        $model->Authentication($_POST['Username'], $_POST['Password']);
    }
}
