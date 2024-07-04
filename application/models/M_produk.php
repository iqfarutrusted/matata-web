<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_Produk extends CI_Model
{

    public function get_product_by_id($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $query = $this->db->get('produk');
        return $query->row();
    }
}
