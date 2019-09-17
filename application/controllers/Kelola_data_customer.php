<?php

class Kelola_data_customer extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kelola_data_customer_model');
    }
    public function index(){
        $data['title'] = "Kelola Data Customer";
        $data['data_customer'] = $this->kelola_data_customer_model->getAllcustomer();
        if($this->input->post('cari')){
            $data['data_customer'] = $this->kelola_data_customer_model->cariCustomer();
        }
        $this->load->view('partials/header', $data);
        $this->load->view('customer/kelola_data_customer');
        $this->load->view('partials/footer');
    }
    public function tambah_data_customer(){
        $data['title'] = "Tambah Data customer";
        $this->form_validation->set_rules('nama_customer', 'Nama customer', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTlp', 'No Telepon', 'required|numeric');
        
        if($this->form_validation->run()== FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('customer/tambah_data_customer');
            $this->load->view('partials/footer');
        } else{
            $this->kelola_data_customer_model->tambahCustomer();
            $this->session->set_flashdata('data', 'tersimpan');
            redirect('kelola_data_customer');
        }
    }
    public function edit_data_customer($id_customer){
        $data['title'] = "Ubah Data customer";
        $data['data_customer'] = $this->kelola_data_customer_model->getCustomerById($id_customer);
        $this->form_validation->set_rules('nama_customer', 'Nama customer', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('noTlp', 'No Telepon', 'required|numeric');
           
        if($this->form_validation->run()== FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('customer/edit_data_customer');
            $this->load->view('partials/footer');
        } else{
            $this->kelola_data_customer_model->editCustomer();
            $this->session->set_flashdata('data', 'diubah');
            redirect('kelola_data_customer');
        }
    }
    public function hapus_data_customer($id_customer){
        $this->kelola_data_customer_model->hapusCustomer($id_customer);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Kelola_data_customer');
        
    }

}