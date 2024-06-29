<?php
defined('BASEPATH') or exit('no direct script access allowed');

class M_Produk extends CI_Model
{

    public function get_data($table)
    {
        return $this->db->get($table);
    }
}
