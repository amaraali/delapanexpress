<?php
class Layanan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Layanan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();

        $this->form_validation->set_rules('layanan', 'Layanan', 'required', [
            'required' => 'Data Layanan harus diisi'
        ]);
        $this->form_validation->set_rules('proses', 'proses', 'required|min_length[3]', [
            'required' => 'Nama proses harus diisi',
            'min_length' => 'Nama proses terlalu pendek'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'Data Harga harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('layanan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'layanan' => $this->input->post('layanan', TRUE),
                'proses' => $this->input->post('proses', true),
                'harga' => $this->input->post('harga', true)
            ];

            $this->ModelLayanan->simpanLayanan($data);
            redirect('layanan');
        }
    }

    public function ubahLayanan()
    {
        $data['judul'] = 'Ubah Data Layanan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['layanan'] = $this->ModelLayanan->layananWhere(['id_layanan' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('layanan', 'Nama Layanan', 'required|min_length[3]', [
            'required' => 'Nama Layanan harus diisi',
            'min_length' => 'Nama Layanan terlalu pendek'
        ]);
        $this->form_validation->set_rules('proses', 'proses', 'required|min_length[3]', [
            'required' => 'Nama proses harus diisi',
            'min_length' => 'Nama proses terlalu pendek'
        ]);
        $this->form_validation->set_rules('harga', 'harga', 'required', [
            'required' => 'Data Harga harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('layanan/ubah_layanan', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'layanan' => $this->input->post('layanan', true),
                'proses' => $this->input->post('proses', true),
                'harga' => $this->input->post('harga', true)
            ];

            $this->ModelLayanan->updateLayanan(['id_layanan' => $this->input->post('id_layanan')], $data);
            redirect('layanan/index');
        }
    }

    public function hapusLayanan()
    {
        $where = ['id_layanan' => $this->uri->segment(3)];
        $this->ModelLayanan->hapusLayanan($where);
        redirect('layanan/index');
    }
}