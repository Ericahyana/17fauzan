<?php

class kelola_data_supplier_model extends CI_model {
    public function getAllsupplier(){
        return $this->db->get('data_supplier')->result_array();   
    }
    public function tambahSupplier(){
        $data = [
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat_supplier" => $this->input->post('alamat', true),
            "no_tlp" => $this->input->post('noTlp', true)
        ];

        $this->db->insert('data_supplier', $data);
    }
    public function getSupplierById($id_supplier){
        return $this->db->get_where('data_supplier', ['id_supplier' => $id_supplier])->row_array();
    }
    public function editSupplier(){
        $data = [
            "nama_supplier" => $this->input->post('nama_supplier', true),
            "alamat_supplier" => $this->input->post('alamat', true),
            "no_tlp" => $this->input->post('noTlp', true)
        ];
        $this->db->where('id_supplier', $this->input->post('id_supplier'));
        $this->db->update('data_supplier', $data);
    }
    public function hapusSupplier($id_supplier){
        $this->db->delete('data_supplier', ['id_supplier' => $id_supplier]);
    }
    public function cariSupplier(){
        $cari = $this->input->post('cari', true);
        $this->db->like('nama_supplier', $cari);
        return $this->db->get('data_supplier')->result_array();
    }

}