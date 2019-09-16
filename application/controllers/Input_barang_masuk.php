<?php

class Input_barang_masuk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kelola_data_barang_model');
        $this->load->model('kelola_data_supplier_model');
    }
    public function index(){
    if($this->session->userdata('auth')){
        $data['title'] = "Input Barang Keluar";
        $data['data_barang'] = $this->kelola_data_barang_model->getAllbarang();
        $data['data_supplier'] = $this->kelola_data_supplier_model->getAllsupplier();
        $this->form_validation->set_rules('id_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        if($this->form_validation->run() == FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('barang/input_barang_masuk', $data);
            $this->load->view('partials/footer');
        } else {
            $this->kelola_data_barang_model->inputBarangMasuk();
            $this->session->set_flashdata('data', 'tersimpan');
            redirect('input_barang_masuk');
            
        }
        
        }else{
            redirect('login');
        }

    }
}