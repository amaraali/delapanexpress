<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBarang extends CI_Model
{
    //manajemen barang
    public function getBarang()
    {
        return $this->db->get('barang');
    }

    public function barangWhere($where)
    {
        return $this->db->get_where('barang', $where);
    }

    public function simpanBarang($data = null)
    {
        $this->db->insert('barang', $data);
    }

    public function hapusBarang($where = null)
    {
        $this->db->delete('barang', $where);
    }

    public function updateBarang($where = null, $data = null)
    {
        $this->db->update('barang', $data, $where);
    }
    
}