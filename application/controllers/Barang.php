<?php
class Barang extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Data Barang';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();

        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required', [
            'required' => 'Nama Barang harus diisi'
        ]);
        $this->form_validation->set_rules('no_resi', 'no_resi', 'required', [
            'required' => 'No resi harus diisi'
        ]);
        $this->form_validation->set_rules('berat', 'berat', 'required', [
            'required' => 'Data berat harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang', TRUE),
                'no_resi' => $this->input->post('no_resi', TRUE),
                'berat' => $this->input->post('berat', true)
            ];

            $this->ModelBarang->simpanBarang($data);
            redirect('barang');
        }
    }

    public function ubahBarang()
    {
        $data['judul'] = 'Ubah Data Barang';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->ModelBarang->barangWhere(['id_barang' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required', [
            'required' => 'Nama Barang harus diisi'
        ]);
        $this->form_validation->set_rules('no_resi', 'no_resi', 'required', [
            'required' => 'No resi harus diisi'
        ]);
        $this->form_validation->set_rules('berat', 'berat', 'required', [
            'required' => 'Data berat harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang/ubah_barang', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nama_barang' => $this->input->post('nama_barang', TRUE),
                'no_resi' => $this->input->post('no_resi', TRUE),
                'berat' => $this->input->post('berat', true)
            ];

            $this->ModelBarang->updateBarang(['id_barang' => $this->input->post('id_barang')], $data);
            redirect('barang/index');
        }
    }

    public function hapusBarang()
    {
        $where = ['id_barang' => $this->uri->segment(3)];
        $this->ModelBarang->hapusBarang($where);
        redirect('barang/index');
    }
}