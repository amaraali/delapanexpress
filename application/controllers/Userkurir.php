<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Userkurir extends CI_Controller
{
   
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('userkurir/sidebar', $data);
        $this->load->view('userkurir/topbar', $data);
        $this->load->view('userkurir/index', $data);
        $this->load->view('templates/footer');
    }

    public function datapengiriman()
    {
        $data['judul'] = "Data Pengiriman";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('userkurir/sidebar', $data);
        $this->load->view('userkurir/topbar', $data);
        $this->load->view('userkurir/pengiriman', $data);
        $this->load->view('templates/footer');

    }

    public function ubahPengiriman()
    {
        $data['judul'] = "Ubah Data Pengiriman";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pengiriman'] = $this->ModelPengiriman->pengirimanWhere(['id_pengiriman' => $this->uri->segment(3)])->result_array();
        $data['pelanggan'] = $this->ModelPelanggan->getPelanggan()->result_array();
        $data['kurir'] = $this->ModelKurir->getKurir()->result_array();
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

        $this->form_validation->set_rules('id_pengiriman', 'id_pengiriman', 'required', [
            'required' => 'ID Pengiriman harus diisi'
        ]);
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required', [
            'required' => 'Tanggal harus diisi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('userkurir/sidebar', $data);
            $this->load->view('userkurir/topbar', $data);
            $this->load->view('userkurir/ubah_pengiriman', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_pengiriman' => $this->input->post('id_pengiriman', true),
                'penerima' => $this->input->post('penerima', true),
                'keterangan' => $this->input->post('keterangan', true),
                'status' => $this->input->post('status', true)
            ];

            $this->ModelPengiriman->updatePengiriman(['id_pengiriman' => $this->input->post('id_pengiriman')], $data);
            redirect('userkurir/datapengiriman');
        }
    }

}