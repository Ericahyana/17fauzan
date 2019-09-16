<?php

class kelola_laporan_model extends CI_model {

	 public function getBarangMasuk(){
        $this->db->select('*');
		$this->db->from('input_barang_masuk');
		$this->db->order_by('id_masuk', 'DESC');
		$this->db->join('data_barang', 'data_barang.id_barang = input_barang_masuk.id_barang');
		$this->db->join('data_supplier', 'data_supplier.id_supplier = input_barang_masuk.id_supplier');
		$query = $this->db->get();
		return $query->result_array();
    }
    public function getBarangKeluar(){
        $this->db->select('*');
		$this->db->from('input_barang_keluar');
		$this->db->order_by('id_keluar', 'DESC');
		$this->db->join('data_barang', 'data_barang.id_barang = input_barang_keluar.id_barang');
		$this->db->join('data_customer', 'data_customer.id_customer = input_barang_keluar.id_customer');
		$query = $this->db->get();
		return $query->result_array();
    }
	 public function getBarangMasuk2($tgl){
        $this->db->select('*');
		$this->db->from('input_barang_masuk');
		$this->db->order_by('id_masuk', 'DESC');
		$this->db->join('data_barang', 'data_barang.id_barang = input_barang_masuk.id_barang');
		$this->db->join('data_supplier', 'data_supplier.id_supplier = input_barang_masuk.id_supplier');

		$this->db->where('input_barang_masuk.tanggal_masuk', $tgl);
		$query = $this->db->get();
		return $query->result_array();
    }
    public function getBarangKeluar2($tgl){
        $this->db->select('*');
		$this->db->from('input_barang_keluar');
		$this->db->order_by('id_keluar', 'DESC');
		$this->db->join('data_barang', 'data_barang.id_barang = input_barang_keluar.id_barang');
		$this->db->join('data_customer', 'data_customer.id_customer = input_barang_keluar.id_customer');

		$this->db->where('input_barang_keluar.tanggal_keluar', $tgl);
		$query = $this->db->get();
		return $query->result_array();
    }

    
    public function cariBarangMasuk(){
    	$cari = $this->input->post('cari', true);
    	$this->db->like('nama_barang', $cari);
    	$this->db->or_like('kode_barang', $cari);
    	$this->db->or_like('nama_supplier', $cari);
    	$this->db->or_like('tanggal_masuk', $cari);
		$this->db->from('input_barang_masuk');
		$this->db->order_by('id_masuk', 'DESC');
		$this->db->join('data_barang', 'data_barang.id_barang = input_barang_masuk.id_barang');
		$this->db->join('data_supplier', 'data_supplier.id_supplier = input_barang_masuk.id_supplier');
		return $this->db->get()->result_array();
		
    }
    public function cariBarangKeluar(){
    	$cari = $this->input->post('cari', true);
    	$this->db->like('nama_barang', $cari);
    	$this->db->or_like('kode_barang', $cari);
    	$this->db->or_like('nama_customer', $cari);
    	$this->db->or_like('tanggal_keluar', $cari);
		$this->db->from('input_barang_keluar');
		$this->db->order_by('id_keluar', 'DESC');
		$this->db->join('data_barang', 'data_barang.id_barang = input_barang_keluar.id_barang');
		$this->db->join('data_customer', 'data_customer.id_customer = input_barang_keluar.id_customer');
		return $this->db->get()->result_array();
		
    }
}