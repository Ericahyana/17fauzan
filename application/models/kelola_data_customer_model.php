<?php

class kelola_data_customer_model extends CI_model {
    public function getAllcustomer(){
        return $this->db->get('data_customer')->result_array();
    }
    public function tambahCustomer(){
        $data = [
            "nama_customer" => $this->input->post('nama_customer', true),
            "alamat_customer" => $this->input->post('alamat', true),
            "no_tlp" => $this->input->post('noTlp', true)
        ];

        $this->db->insert('data_customer', $data);
    }
    public function getCustomerById($id_customer){
        return $this->db->get_where('data_customer', ['id_customer' => $id_customer])->row_array();
    }
    public function editCustomer(){
        $data = [
            "nama_customer" => $this->input->post('nama_customer', true),
            "alamat_customer" => $this->input->post('alamat', true),
            "no_tlp" => $this->input->post('noTlp', true)
        ];
        $this->db->where('id_customer', $this->input->post('id_customer'));
        $this->db->update('data_customer', $data);
    }
    public function hapusCustomer($id_customer){
        $this->db->delete('data_customer', ['id_customer' => $id_customer]);
    }



}