<?php

class Kelola_data_barang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kelola_data_barang_model');
    }
    public function index(){
        $data['title'] = "Kelola Data Barang";
        $data['data_barang'] = $this->kelola_data_barang_model->getAllbarang();
        if($this->input->post('cari')){
            $data['data_barang'] = $this->kelola_data_barang_model->cariBarang();
        }
        $this->load->view('partials/header', $data);
        $this->load->view('barang/kelola_data_barang', $data);
        $this->load->view('partials/footer');

    }
    public function tambah_data_barang(){
        $data['title'] = "Tambah Data Barang";
        $this->form_validation->set_rules('kode_barang', 'Kode', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        
        if($this->form_validation->run()== FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('barang/tambah_data_barang');
            $this->load->view('partials/footer');
        } else{
            $this->kelola_data_barang_model->tambahBarang();
            $this->session->set_flashdata('data', 'tersimpan');
            redirect('kelola_data_barang');

        }
    }
    public function edit_data_barang($id_barang){
        $data['title'] = "Ubah Data Barang";
        $data['data_barang'] = $this->kelola_data_barang_model->getBarangById($id_barang);
        $this->form_validation->set_rules('kode_barang', 'Kode', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        
        if($this->form_validation->run()== FALSE){
            $this->load->view('partials/header', $data);
            $this->load->view('barang/edit_data_barang', $data);
            $this->load->view('partials/footer');
        } else{
            $this->kelola_data_barang_model->editBarang();
            $this->session->set_flashdata('data', 'diubah');
            redirect('kelola_data_barang');

        }
    }
    public function hapus_data_barang($id_barang){
        $this->kelola_data_barang_model->hapusBarang($id_barang);
        $this->session->set_flashdata('hapus', 'Dihapus');
        redirect('Kelola_data_barang');

    }
}