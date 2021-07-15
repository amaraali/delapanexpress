<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKurir extends CI_Model
{
    //manajemen kurir
    public function getKurir()
    {
        return $this->db->get('kurir');
    }

    public function kurirWhere($where)
    {
        return $this->db->get_where('kurir', $where);
    }

    public function simpanKurir($data = null)
    {
        $this->db->insert('kurir', $data);
    }

    public function hapusKurir($where = null)
    {
        $this->db->delete('kurir', $where);
    }

    public function updateKurir($where = null, $data = null)
    {
        $this->db->update('kurir', $data, $where);
    }
    
}