<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('kegiatan/activity');
		$this->load->view('templates/footer');
	}
}