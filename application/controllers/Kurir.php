<?php
class Kurir extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Kurir';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kurir'] = $this->ModelKurir->getKurir()->result_array();

        $this->form_validation->set_rules('nama_kurir', 'nama_kurir', 'required', [
            'required' => 'Nama harus diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin harus diisi'
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
            $this->load->view('kurir/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kurir' => $this->input->post('nama_kurir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'telepon' => $this->input->post('telepon', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->ModelKurir->simpanKurir($data);
            redirect('kurir');
        }
    }

    public function ubahKurir()
    {
        $data['judul'] = 'Ubah Data Kurir';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kurir'] = $this->ModelKurir->kurirWhere(['id_kurir' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_kurir', 'nama_kurir', 'required', [
            'required' => 'Data Nama harus diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'Jenis Kelamin harus diisi'
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
            $this->load->view('kurir/ubah_kurir', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nama_kurir' => $this->input->post('nama_kurir', true),
                'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
                'telepon' => $this->input->post('telepon', true),
                'alamat' => $this->input->post('alamat', true)
            ];

            $this->ModelKurir->updateKurir(['id_kurir' => $this->input->post('id_kurir')], $data);
            redirect('kurir/index');
        }
    }

    public function hapusKurir()
    {
        $where = ['id_kurir' => $this->uri->segment(3)];
        $this->ModelKurir->hapusKurir($where);
        redirect('kurir/index');
    }
}