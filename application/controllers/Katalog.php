<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}

	public function index()
	{
		$data['produk'] = $this->m_produk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('katalog/menu', $data);
		$this->load->view('templates/footer');
	}

	public function produk($id_produk)
	{
		$data['product'] = $this->m_produk->get_data_by_id($id_produk);

		if (!$data['product']) {
			show_404();
		}

		$this->load->view('templates/header');
		$this->load->view('katalog/produk', $data);
		$this->load->view('templates/footer');
	}
}
