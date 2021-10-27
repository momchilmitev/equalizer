<?php

class App
{
    public function __construct()
    {
        $url = $this->splitURL();

        print_r($url);
    }

    public function splitURL()
    {
        return explode('/', filter_var(trim($_GET['url'], '/')), FILTER_SANITIZE_URL);
    }
}
