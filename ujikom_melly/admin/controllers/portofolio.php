<?php

class Portofolio extends Controller
{
    public function index()
    {
        //kirim parameter ke method model() yang ada di core/controller.php
        $data['profile'] = $this->model('PortofolioModel');

        $this->view('portofolio/index',$data);
    }
}