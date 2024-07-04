<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk'); // Load the product model
	}

	public function index()
	{
		$data['produk'] = $this->m_produk->tampil_data()->result(); // Fetch product data

		$this->load->view('templates/header');
		$this->load->view('dashboard/home', $data); // Pass data to the view
		$this->load->view('templates/footer');
	}
}
