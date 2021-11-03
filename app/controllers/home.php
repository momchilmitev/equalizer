<?php

class Home extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'Photos';
        $this->view('catalog/index', $data);
    }
}
