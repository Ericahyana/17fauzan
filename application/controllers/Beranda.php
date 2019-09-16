<?php

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kelola_laporan_model');
        $this->load->model('kelola_data_barang_model');
    }
    public function index(){
        //ngeload ke view partial/
        $tgl = date("Y-m-d");
        if($this->session->userdata('auth')){
            $data['title'] = "Beranda";
            $data['barang_masuk'] = $this->kelola_laporan_model->getBarangMasuk2($tgl);
            $data['barang_keluar'] = $this->kelola_laporan_model->getBarangKeluar2($tgl);
            $this->load->view("partials/header", $data);
            $this->load->view("beranda/index");
            $this->load->view("partials/footer");

        }else{
            redirect('login');
        }

    }


}