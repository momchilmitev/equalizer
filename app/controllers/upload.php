<?php

class Upload extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'Photos';
        $this->view('catalog/index', $data);
    }

    public function image()
    {
        $data['page_title'] = 'Upload Image';
        $this->view('catalog/upload_image', $data);
    }

    public function video()
    {
        $data['page_title'] = 'Upload Video';
        $this->view('catalog/upload_video', $data);
    }
}
