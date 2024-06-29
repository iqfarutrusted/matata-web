<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('karir/lowongan');
		$this->load->view('templates/footer');
	}
}