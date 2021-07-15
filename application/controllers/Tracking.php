<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tracking extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'DELAPAN EXPRESS';
        $this->load->view('tracking/header', $data);
        $this->load->view('tracking/index');
        $this->load->view('tracking/footer');
    }

    public function pencariandata()
    {
        $data['judul'] = 'DEX | Pengiriman Data';
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();
        $data['pelanggan'] = $this->ModelPelanggan->getPelanggan()->result_array();
        $data['kurir'] = $this->ModelKurir->getKurir()->result_array();
        $data['pengiriman'] = $this->ModelPengiriman->getPengiriman()->result_array();
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();

        if ($this->input->post('keyword')) {
            $data['data_pengiriman'] = $this->ModelPengiriman->cariDataPengiriman();
        }

        $this->load->view('tracking/header', $data);
        $this->load->view('tracking/pengirimandata', $data);
        $this->load->view('tracking/footer');
    }

    public function daftarlayanan()
    {
        $data['judul'] = 'DEX | Daftar Layanan';
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();
        $this->load->view('tracking/header', $data);
        $this->load->view('tracking/layanan', $data);
        $this->load->view('tracking/footer');
    }

    public function informasi()
    {
        $data['judul'] = 'DEX | Information';
        $this->load->view('tracking/header', $data);
        $this->load->view('tracking/information');
        $this->load->view('tracking/footer');
    }

    public function aboutus()
    {
        $data['judul'] = 'DEX | About Us';
        $this->load->view('tracking/header', $data);
        $this->load->view('tracking/about');
        $this->load->view('tracking/footer');
    }
}
