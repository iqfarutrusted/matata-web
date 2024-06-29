<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('mitra/mitra-usaha');
		$this->load->view('templates/footer');
	}
}