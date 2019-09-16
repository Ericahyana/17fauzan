<?php

class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
    	if($this->session->userdata('auth')) // Jika user sudah login (Session authenticated ditemukan)
      redirect('beranda'); // Redirect ke page welcome
    $this->load->view('login/login'); // Load view login.php
  }
  public function login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = ($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    $user = $this->login_model->get($username,$password); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('username', 'Username tidak ditemukan'); // Buat session flashdata
     redirect('login'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'auth'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,  // Buat session username
          'nama'=>$user->nama // Buat session authenticated
        );
        
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('beranda'); // Redirect ke halaman welcome
      }else{
        $this->session->set_flashdata('username', 'Password salah'); // Buat session flashdata
        redirect('login'); // Redirect ke halaman login
      }
    }
  }
 //    	$this->load->view('login/login');
	// }
	// public function login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => $password
	// 		);
	// 	$cek = $this->login_model->cek_login("login",$where)->num_rows();
	// 	if($cek > 0){
 
	// 		$data_session = array(
	// 			'nama' => $username,
	// 			'status' => "login"
	// 			);
 
	// 		$this->session->set_userdata($data_session);
	// 		echo "Username dan password benar !";
	// 		redirect(base_url("beranda"));
 
	// 	}else{
	// 		echo "Username dan password salah !";
	// 	}
	// }
	
    // 	$this->form_validation->set_rules('username', 'Username', 'required');
    // 	$this->form_validation->set_rules('password', 'Password', 'required');
    // 	if($this->form_validation->run() == false){
    // 		$data['title'] = "Login";
	   //      // $this->load->view('partials/header', $data);
	   //      $this->load->view('login/login', $data);
	   //      // $this->load->view('partials/footer');	
    // 	}else{
    // 		$this->_login();
    // 	}
    	
    // }
    // private function _login(){
    // 	$username = $this->input->post('username');
    // 	$password = $this->input->post('password');

    // 	$login = $this->db->get_where('login', ['username' => $username])->row_array();

    // 	if($login > 0){
    // 		if(password_verify($password, $login['password'])){
    // 			$data=[
    // 				'username' => $login['username'],
    // 				'password' => $login['password']
    // 			];
    // 			$this->session->set_userdata($data);
    // 			redirect('beranda');

    // 		}else{
    // 			$this->session->set_flashdata('data', '<div class="alert alert-danger" role="alert">Password tidak benar!</div>');
    // 		}

    // 	}else{
    // 		$this->session->set_flashdata('data', '<div class="alert alert-danger" role="alert">Username tidak benar!</div>');
    // 		redirect('login');
    // 	}

    // }
    // public function logout(){
    // 	$this->session->unset_userdata('username');
    // 	$this->session->set_flashdata('data', '<div class="alert alert-danger" role="alert">Andata telah keluar!</div>');
    // 	redirect('login');

    // }
}