<?php

class Kelola_data_supplier extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kelola_data_supplier_model');
    }
    public function index(){
        $data['title'] = "Kelola Data Supplier";
        $data['data_supplier'] = $this->kelola_data_supplier_model->getAllsupplier();
        if($this->input->post('cari')){
            $data['data_supplier'] = $this->kelola_data_supplier_model->cariSupplier();
        }
        $this->load->view('partials/header', $data);
        $this->load->view('supplier/kelola_data_supplier');
        $this->load->view('partials/footer');
    }
    public function tambah_data_supplier(){
        $data['title'] = "Tambah Data Supplier";
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTlp', 'No Telepon', 'required|numeric');
        
        if($this->form_validation->run()== FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('supplier/tambah_data_supplier');
            $this->load->view('partials/footer');
        } else{
            $this->kelola_data_supplier_model->tambahSupplier();
            $this->session->set_flashdata('data', 'tersimpan');
            redirect('kelola_data_supplier');

        }
    }
    public function edit_data_supplier($id_supplier){
        $data['title'] = "Ubah Data Supplier";
        $data['data_supplier'] = $this->kelola_data_supplier_model->getSupplierById($id_supplier);
        $this->form_validation->set_rules('nama_supplier', 'Nama Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTlp', 'No Telepon', 'required|numeric');
        
        if($this->form_validation->run()== FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('supplier/edit_data_supplier');
            $this->load->view('partials/footer');
        } else{
            $this->kelola_data_supplier_model->editSupplier();
            $this->session->set_flashdata('data', 'diubah');
            redirect('kelola_data_supplier');
            
        }
    }
    public function hapus_data_supplier($id_supplier){
        $this->kelola_data_supplier_model->hapusSupplier($id_supplier);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Kelola_data_supplier');
        
    }
}