<?php

class Videos extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'About';
        $this->view('catalog/videos', $data);
    }
}
