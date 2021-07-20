<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pengiriman extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Data Pengiriman";
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->ModelPelanggan->getPelanggan()->result_array();
        $data['kurir'] = $this->ModelKurir->getKurir()->result_array();
        $data['pengiriman'] = $this->ModelPengiriman->getPengiriman()->result_array();
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

        $this->form_validation->set_rules('id_pengiriman', 'id_pengiriman', 'required', [
            'required' => 'ID Pengiriman harus diisi'
        ]);
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required', [
            'required' => 'Tanggal harus diisi',
        ]);
        $this->form_validation->set_rules('id_pelanggan', 'id_pelanggan', 'required', [
            'required' => 'pelanggan harus diisi',
        ]);
        $this->form_validation->set_rules('id_barang', 'id_barang', 'required', [
            'required' => 'Barang harus diisi',
        ]);
        $this->form_validation->set_rules('id_kurir', 'id_kurir', 'required', [
            'required' => 'kurir harus diisi',
        ]);
        $this->form_validation->set_rules('id_layanan', 'id_layanan', 'required', [
            'required' => 'Jenis layanan harus diisi',
        ]);
        $this->form_validation->set_rules('status', 'status', 'required', [
            'required' => 'Status harus diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengiriman/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_pengiriman' => $this->input->post('id_pengiriman', true),
                'tanggal' => $this->input->post('tanggal', true),
                'id_pelanggan' => $this->input->post('id_pelanggan', true),
                'id_barang' => $this->input->post('id_barang', true),
                'id_kurir' => $this->input->post('id_kurir', true),
                'id_layanan' => $this->input->post('id_layanan', true),
                'keterangan' => $this->input->post('keterangan', true),
                'status' => $this->input->post('status', true)
            ];

            $this->ModelPengiriman->simpanPengiriman($data);
            redirect('pengiriman');
        }
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
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pengiriman/ubah_pengiriman', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_pengiriman' => $this->input->post('id_pengiriman', true),
                'penerima' => $this->input->post('penerima', true),
                'keterangan' => $this->input->post('keterangan', true),
                'status' => $this->input->post('status', true)
            ];

            $this->ModelPengiriman->updatePengiriman(['id_pengiriman' => $this->input->post('id_pengiriman')], $data);
            redirect('pengiriman/index');
        }
    }

    public function hapusPengiriman()
    {
        $where = ['id_pengiriman' => $this->uri->segment(3)];
        $this->ModelPengiriman->hapusPengiriman($where);
        redirect('pengiriman/index');
    }
}
