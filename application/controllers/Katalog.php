<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{
	// ... your constructor ...

	public function index()
	{
		$data['produk'] = $this->m_produk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('katalog/menu', $data);
		$this->load->view('templates/footer');
	}

	public function produk($id_produk = null)
	{
		if ($id_produk !== null) {
			$data['product'] = $this->m_produk->get_data_by_id($id_produk);

			if (!$data['product']) {
				show_404();
			}
		}

		$this->load->view('templates/header');
		$this->load->view('katalog/produk', $data); // Load product view always
		$this->load->view('templates/footer');
	}
}
