<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Kullanicilar_Model");
    }


    public function index()
    {
        $this->load->view("dashboard_v");
    }
}
