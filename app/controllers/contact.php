<?php

class Contact extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'Contact';
        $this->view('catalog/contact', $data);
    }
}
