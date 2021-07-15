<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelLayanan extends CI_Model
{
    //manajemen layanan
    public function getLayanan()
    {
        return $this->db->get('layanan');
    }

    public function layananWhere($where)
    {
        return $this->db->get_where('layanan', $where);
    }

    public function simpanLayanan($data = null)
    {
        $this->db->insert('layanan', $data);
    }

    public function hapusLayanan($where = null)
    {
        $this->db->delete('layanan', $where);
    }

    public function updateLayanan($where = null, $data = null)
    {
        $this->db->update('layanan', $data, $where);
    }
    
}