<?php
class Pelanggan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Pelanggan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->ModelPelanggan->getPelanggan()->result_array();

        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required', [
            'required' => 'Data Nama harus diisi'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|numeric', [
            'required' => 'No Telepon harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelanggan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan', true),
                'telepon' => $this->input->post('telepon', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->ModelPelanggan->simpanPelanggan($data);
            redirect('pelanggan');
        }
    }

    public function ubahPelanggan()
    {
        $data['judul'] = 'Ubah Data Pelanggan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->ModelPelanggan->pelangganWhere(['id_pelanggan' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan', 'required', [
            'required' => 'Data Nama harus diisi'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|numeric', [
            'required' => 'Telepon harus diisi',
            'numeric' => 'Yang anda masukan bukan angka'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelanggan/ubah_pelanggan', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nama_pelanggan' => $this->input->post('nama_pelanggan', true),
                'telepon' => $this->input->post('telepon', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->ModelPelanggan->updatePelanggan(['id_pelanggan' => $this->input->post('id_pelanggan')], $data);
            redirect('pelanggan/index');
        }
    }

    public function hapusPelanggan()
    {
        $where = ['id_pelanggan' => $this->uri->segment(3)];
        $this->ModelPelanggan->hapusPelanggan($where);
        redirect('pelanggan/index');
    }
}