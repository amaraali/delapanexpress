<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    //manajemen User
    public function getUser()
    {
        return $this->db->get('user');
    }

    public function userWhere($where)
    {
        return $this->db->get_where('user', $where);
    }

    public function simpanUser($data = null)
    {
        $this->db->insert('user', $data);
    }

    public function hapusUser($where = null)
    {
        $this->db->delete('user', $where);
    }

    public function updateUser($where = null, $data = null)
    {
        $this->db->update('user', $data, $where);
    }
    
    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
    
}
