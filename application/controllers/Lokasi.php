<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('lokasi/location');
		$this->load->view('templates/footer');
	}
}