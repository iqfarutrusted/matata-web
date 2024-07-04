<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_Produk extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('produk');
    }

    public function get_data_by_id($id_produk)
    {
        return $this->db->get_where('produk', array('id_produk' => $id_produk))->row();
    }
}
