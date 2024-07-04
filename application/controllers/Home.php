<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk', 'produk'); // Load your custom model
	}
	public function index()
	{
		$data['produk'] = $this->produk->tampil_data()->result(); // Use the 'tampil_data' method
		$this->load->view('templates/header');
		$this->load->view('dashboard/home', $data);
		$this->load->view('templates/footer');
	}
}
