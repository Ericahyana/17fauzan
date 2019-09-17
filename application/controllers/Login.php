<?php

class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
      $data['title'] = "GUDANG";
    	if($this->session->userdata('auth')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('beranda'); // Redirect ke page welcome
    $this->load->view('login/login', $data); // Load view login.php
  }
  public function login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = ($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('login/login');
    } else {
        $user = $this->login_model->get($username,$password); // Panggil fungsi get yang ada di UserModel.php
        if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
          $this->session->set_flashdata('username', '<div class="alert alert-danger" role="alert">
                      Username tidak ditemukan.
                    </div>'); // Buat session flashdata
         redirect('login'); // Redirect ke halaman login
        }else{
          if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
            $session = array(
                'auth'=>true,
              'username'=>$user->username
            );
            
            $this->session->set_userdata($session); // Buat session sesuai $session
            redirect('beranda'); // Redirect ke halaman welcome
          }else{
            $this->session->set_flashdata('username', '<div class="alert alert-danger" role="alert">
                      Password salah.
                    </div>'); // Buat session flashdata
            redirect('login'); // Redirect ke halaman login
          }
        } 
    }

  }
}