<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
   
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();
        $data['kurir'] = $this->ModelKurir->getKurir()->result_array();
        $data['pelanggan'] = $this->ModelPelanggan->getPelanggan()->result_array();
        $data['pengiriman'] = $this->ModelPengiriman->getPengiriman()->result_array();
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
}