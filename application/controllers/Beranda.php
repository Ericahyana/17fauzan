<?php

class Beranda extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        //ngeload ke view partial/
        if($this->session->userdata('auth')){
    
            $data['title'] = "Beranda";
            $this->load->view("partials/header", $data);
            $this->load->view("beranda/index");
            $this->load->view("partials/footer");

        }else{
            redirect('login');
        }

    }

}