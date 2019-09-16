<?php

class Header extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        //ngeload ke view partial/header

        $this->load->view("partials/header");
  
    }
 	public function logout(){
    	$this->session->unset_userdata('username');
    	$this->session->unset_userdata('auth');
    	$this->session->set_flashdata('data', '<div class="alert alert-danger" role="alert">Andata telah keluar!</div>');
    	redirect('login');

    }
    
}