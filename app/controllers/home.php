<?php

class Home extends BaseController
{
    public function index()
    {
        $this->view('catalog/index');
    }
}
