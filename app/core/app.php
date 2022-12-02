<?php
class app{
    public function __construct()
    {
        $arr = $this->parseUrl();
            if (file_exists('..app/controllers/' . $arr[0] . '.php')){
                header('location: https://open.spotify.com/playlist/37i9dQZF1F0sijgNaJdgit');
            }
    }
    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            //return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            // echo $_GET['url'];
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}
?>