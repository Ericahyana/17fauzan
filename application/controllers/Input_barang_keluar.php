<?php

class Input_barang_keluar extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kelola_data_barang_model');
        $this->load->model('kelola_data_customer_model');
    }
public function index(){    if($this->session->userdata('auth')){
   
        $data['title'] = "Input Barang Keluar";
        $data['data_barang'] = $this->kelola_data_barang_model->getAllbarang();
        $data['data_customer'] = $this->kelola_data_customer_model->getAllcustomer();
        $this->form_validation->set_rules('id_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('id_customer', 'Nama Customer', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        if($this->form_validation->run() == FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('barang/input_barang_keluar', $data);
            $this->load->view('partials/footer');
        } else {
                $a = $this->input->post('id_barang', true);
                $jumlah = $this->input->post('jumlah', true);
                $data = $this->kelola_data_barang_model->getStok($a);
                   // print_r($data); 
                if($jumlah<=$data['stok']){
                    $this->kelola_data_barang_model->inputBarangKeluar();
                    $this->session->set_flashdata('data', 'tersimpan');
                    redirect('input_barang_keluar');
                }else{
                    $this->session->set_flashdata('data_error', 'Stok Kurang ! :(');
                    redirect('input_barang_keluar');
                }
            }
          
    }else{
        redirect('login');
    }
    } 
}
