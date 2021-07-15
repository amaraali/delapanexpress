<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPelanggan extends CI_Model
{
    //manajemen pelanggan
    public function getPelanggan()
    {
        return $this->db->get('pelanggan');
    }

    public function pelangganWhere($where)
    {
        return $this->db->get_where('pelanggan', $where);
    }

    public function simpanPelanggan($data = null)
    {
        $this->db->insert('pelanggan', $data);
    }

    public function hapusPelanggan($where = null)
    {
        $this->db->delete('pelanggan', $where);
    }

    public function updatePelanggan($where = null, $data = null)
    {
        $this->db->update('pelanggan', $data, $where);
    }

}