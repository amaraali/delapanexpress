<?php
class Modelpengiriman extends CI_Model
{
	public function getPengiriman()
    {
        return $this->db->get('pengiriman');
    }

    public function pengirimanWhere($where)
    {
        return $this->db->get_where('pengiriman', $where);
    }

    public function simpanPengiriman($data = null)
    {
        $this->db->insert('Pengiriman', $data);
    }

    public function hapusPengiriman($where = null)
    {
        $this->db->delete('Pengiriman', $where);
    }

    public function updatePengiriman($where = null, $data = null)
    {
        $this->db->update('Pengiriman', $data, $where);
    }

    public function joinpengiriman()
    {
        $this->db->select('*');
        $this->db->from('pengiriman');
        $this->db->join('pelanggan' , 'pengiriman.id_pelanggan = pelanggan.id_pelanggan' , 'LEFT');
        $this->db->join('barang' , 'pengiriman.id_barang = barang.id_barang' , 'LEFT');
        $this->db->join('kurir' , 'pengiriman.id_kurir = kurir.id_kurir' , 'LEFT');
        $this->db->join('layanan' , 'pengiriman.id_layanan = layanan.id_layanan' , 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function cariDataPengiriman()
    {
        $this->db->select('*');
        $this->db->from('pengiriman');
        $this->db->join('kurir' , 'pengiriman.id_kurir = kurir.id_kurir' , 'LEFT');
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_pengiriman', $keyword);
        return $this->db->get()->result_array();
    }
}