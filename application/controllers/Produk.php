<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Produk extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('katalog/produk');
        $this->load->view('templates/footer');
    }

    public function produk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $query = $this->m_produk->get_data('produk');

        if ($query->num_rows() > 0) {
            $data['product'] = $query->row();
            $this->load->view('templates/header');
            $this->load->view('katalog/produk', $data);
            $this->load->view('templates/footer');
        } else {
            show_404();
        }
    }
}
