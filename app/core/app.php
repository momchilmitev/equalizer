<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->splitURL();

        if (file_exists('../controllers/' . strtolower($url[0]) . '.php')) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        require('../controllers/' . strtolower($url[0]) . '.php');
        $this->controller = new $this->controller();
    }

    public function splitURL()
    {
        return explode('/', filter_var(trim($_GET['url'], '/')), FILTER_SANITIZE_URL);
    }
}
