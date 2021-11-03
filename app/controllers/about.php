<?php

class About extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'About';
        $this->view('catalog/about', $data);
    }
}
