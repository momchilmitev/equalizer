<?php

class Videos extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'Videos';
        $this->view('catalog/videos', $data);
    }
}
