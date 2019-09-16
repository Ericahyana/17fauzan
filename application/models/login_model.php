<?php

class login_model extends CI_model{
    // public function cek_login($login,$where){		
    //     return $this->db->get_where($login,$where);
    // }
    public function get($username,$password){
    	return $this->db->get_where('login', ['username' => $username, 'password' => $password])->row();
        // $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        // $result = $this->db->get('login')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        // return $result;
    }

}