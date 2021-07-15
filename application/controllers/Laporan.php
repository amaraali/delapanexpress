<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Laporan Pengiriman";
		$data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$data['pelanggan'] = $this->ModelPelanggan->getPelanggan()->result_array();
		$data['kurir'] = $this->ModelKurir->getKurir()->result_array();
		$data['pengiriman'] = $this->ModelPengiriman->getPengiriman()->result_array();
        $data['layanan'] = $this->ModelLayanan->getLayanan()->result_array();
        $data['barang'] = $this->ModelBarang->getBarang()->result_array();
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
	}
	
	public function cetak_laporan_pengiriman()
	{
        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

		$this->load->view('laporan/laporan_print_pengiriman', $data);
	}

	public function laporan_pengiriman_pdf() 
	{	
		$this->load->library('dompdf_gen'); 

        $data['data_pengiriman'] = $this->ModelPengiriman->joinpengiriman()->result_array();

		$this->load->view('laporan/laporan_pdf_pengiriman', $data); 

		$paper_size = 'A4'; // ukuran kertas
		$orientation = 'landscape'; //tipe format kertas potrait atau landscape
		$html = $this->output->get_output();

		$this->dompdf->set_paper($paper_size, $orientation); //Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_data_pengiriman.pdf", array('Attachment' => 0)); // nama file pdf yang di hasilkan 
	}

	public function export_excel()
	{
		$data = array('title' => 'Laporan Pengiriman', 'data_pengiriman' => $this->ModelPengiriman->joinpengiriman()->result_array());
		$this->load->view('laporan/export_excel_pengiriman', $data);
	}
}
