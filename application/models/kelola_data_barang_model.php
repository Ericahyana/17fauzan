<?php

class kelola_data_barang_model extends CI_model {
    public function getAllbarang(){
        return $this->db->get('data_barang')->result_array();   
    }
    public function tambahBarang(){
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "harga" => $this->input->post('harga', true)
        ];

        $this->db->insert('data_barang', $data);
    }
    public function getBarangById($id_barang){
        return $this->db->get_where('data_barang', ['id_barang' => $id_barang])->row_array();
    }
    public function getStok($id_barang){
        $this->db->select('stok');
        return $this->db->get_where('data_barang', ['id_barang' => $id_barang])->row_array();
    }
    public function hapusBarang($id_barang){
        // $this->db->where('id_barang', $id_barang);
        $this->db->delete('data_barang', ['id_barang' => $id_barang]);
    }
    public function editBarang(){
        $data = [
            "kode_barang" => $this->input->post('kode_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "deskripsi" => $this->input->post('deskripsi', true),
            "harga" => $this->input->post('harga', true)
        ];
        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update('data_barang', $data);
    }
    public function inputBarangMasuk(){
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "id_supplier" => $this->input->post('id_supplier', true),
            "jumlah_masuk" => $this->input->post('jumlah', true),
            "catatan" => $this->input->post('catatan', true),
            "tanggal_masuk" => date("Y-m-d")
        ];
        $this->db->insert('input_barang_masuk', $data);
    }
    public function inputBarangKeluar(){
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "id_customer" => $this->input->post('id_customer', true),
            "jumlah_keluar" => $this->input->post('jumlah', true),
            "catatan" => $this->input->post('catatan', true),
            "tanggal_keluar" => date("Y-m-d")
        ];
        $this->db->insert('input_barang_keluar', $data);
    }
    public function cariBarang(){
        $cari = $this->input->post('cari', true);
        $this->db->like('nama_barang', $cari);
        $this->db->or_like('kode_barang', $cari);
        return $this->db->get('data_barang')->result_array();
        
    }

}