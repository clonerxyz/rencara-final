<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regven extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Register_vend");
        //$this->load->library('form_validation');
		//public 
    }

    public function index()
    {
        $this->load->view("home/regv");
    }
	public function readu()
	{
		$user=$this->uri->segment(3);
		$this->load->model('Register_vend');
		$cheker=$this->Register_vend->check($user);
		$cheker2=$this->Register_vend->checkc($user);
		$data['chekz'] = $cheker->result();
		$data['chekz2'] = $cheker2->result();
		$data['chekx'] = $user;
		$this->load->view('lg/Checkv', $data);
		//$checku = $this->input->post('check',TRUE);
		//$this->Register_cust->check($checku);
	}
    public function add()
    {
		$config['upload_path']          = './ct/img';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JGP|PNG|JPEG|SVG|svg';
		$config['max_size']             = 100000000;
		$this->load->library('upload', $config);
		//$id = $this->input->post('id');
		$this->upload->do_upload('npwp');
		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];
		$this->upload->do_upload('ktp');
		$upload_data2 = $this->upload->data();
		$file_name2 = $upload_data2['file_name'];
		$pw = $this->input->post('p_v');
		$pwenc = base64_encode($pw);
		$t2 = "vendor";
		$roster = "vend";
		$data = array(
		'npwp' => $file_name,
		'ktp' => $file_name2,
		'u_v' => $this->input->post('u_v'),
		'n_vendor' => $this->input->post('u_v'),
		'p_v' => $pwenc,
		'alamat' => $this->input->post('alamat'),
		'phone' => $this->input->post('phone'),
		'v_status' => $this->input->post('v_status'),
		'contact' => $this->input->post('contact'),
		'roster' => $roster

		);
		//$this->db->where('ida', $id);
		$this->db->insert($t2, $data);
		$this->session->set_flashdata('success', 'Register berhasil');
		redirect('login');	         
    }

 

   
}