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

		$data['produk'] = $this->m_produk->get_data('produk')->result();

		$this->load->view('templates/header');
		$this->load->view('katalog/menu', $data);
		$this->load->view('templates/footer');
	}

	public function produk($id_produk = null)
	{
		if ($id_produk !== null) {  // Check if an ID is provided
			$data['product'] = $this->m_produk->get_data_by_id($id_produk); // Fetch a single product

			if (!$data['product']) { // If no product found, show a 404
				show_404();
			}
		} else {
			// No ID provided, you might want to show all products or redirect to another page
			// Example: $data['produk'] = $this->m_produk->get_data('produk')->result();
		}

		$this->load->view('templates/header');
		$this->load->view('katalog/produk', $data);
		$this->load->view('templates/footer');
	}
}
