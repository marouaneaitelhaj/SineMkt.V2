<?php
class app
{
    protected $controller = 'home';
    protected $method = 'index';
    public function __construct()
    {
        if (isset($_GET['url'])) {
        $arr = $this->parseUrl();
    
            if (file_exists('../app/controllers/' . $arr[0] . '.php')) {
                $this->controller = '../app/controllers/' . $arr[0] . '.php';
                unset($arr[0]);
            }
            include($this->controller);
            if (isset($arr[0])) {
                if(method_exists())
            }
    }
}
    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            //return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            // echo $_GET['url'];
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
