<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}

	public function index()
	{
		$data['produk'] = $this->m_produk->get_data('produk')->result();

		$this->load->view('templates/header');
		$this->load->view('dashboard/home', $data);
		$this->load->view('templates/footer');
	}
}
