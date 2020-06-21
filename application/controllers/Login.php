<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('lg/v_login');
	}
	
	function aksi_login(){
		$username= $this->input->post('username');
		$password = $this->input->post('password');
		$tempu= $this->input->post('tempu');
		$data2 = array(
        'customer' => $username
		);
		$this->db->where('customer', $tempu);
		$this->db->update('midtrans_item_detail', $data2);
		$pwenc = base64_encode($password);
		$where = array(
			'u_a' => $username,
			'p_a' => $pwenc,
			'roster' => 'admin'
			);
		$where2 = array(
			'u_c' => $username,
			'p_c' => $pwenc,
			'roster' => 'user'
			);
		$where3 = array(
			'u_v' => $username,
			'p_v' => $pwenc,
			'v_status' => 'acc',
			'roster' => 'vend'
			);

		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		$cek2 = $this->m_login->cek_login("customer",$where2)->num_rows();
		$cek3 = $this->m_login->cek_login("vendor",$where3)->num_rows();
		if($cek > 0 ){
		$data_session = array(
				'nama' => $username,
				'status' => "admin"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
		}
		
		if($cek2 > 0 ){
		$data_session = array(
				'nama' => $username,
				'status' => "user"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("cust"));
		}
		
		if($cek3 > 0 ){
		$data_session = array(
				'nama' => $username,
				'status' => "vend"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("vendor"));
		}
		if($cek < 1 || $cek2 < 1 || $cek3 < 1){
			redirect(base_url("login/wrong_password"));
		}
		else{
			redirect(base_url("login/unauthorized"));
		}
		
		}
		function unauthorized(){
		$this->load->view('lg/failauth');
		}
		function wrong_password(){
		$this->load->view('main/wrong');
		}
	
	
}