<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pg404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->output->set_status_header('404');
        $this->load->view('templates/header');
        $this->load->view('pg-error');
        $this->load->view('templates/footer');
    }
}
