<?php

class Dashboard  extends CI_Controller
{

    function index()
    {
        $this->load->view('layout/sidebar');
        $this->load->view('layout/navbar');
        $this->load->view('dashboard/dashboard');
        $this->load->view('layout/footer');
    }
}
