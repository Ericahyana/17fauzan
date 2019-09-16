<?php

class Kelola_laporan extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->model('kelola_laporan_model');
        $this->load->model('kelola_data_barang_model');
    }
	public function laporan_masuk(){
		$data['title'] = "Kelola Laporan";
        $data['barang_masuk'] = $this->kelola_laporan_model->getBarangMasuk();
        if($this->input->post('cari')){
            $data['barang_masuk'] = $this->kelola_laporan_model->cariBarangMasuk();
        }
        $this->load->view('partials/header', $data);
        $this->load->view('laporan/laporan_barangMasuk', $data);
        $this->load->view('partials/footer');

	}
    public function laporan_keluar(){
        $data['title'] = "Kelola Laporan";
        $data['barang_keluar'] = $this->kelola_laporan_model->getBarangKeluar();
        if($this->input->post('cari')){
            $data['barang_keluar'] = $this->kelola_laporan_model->cariBarangKeluar();
        }
        $this->load->view('partials/header', $data);
        $this->load->view('laporan/laporan_barangKeluar', $data);
        $this->load->view('partials/footer');

    }
}