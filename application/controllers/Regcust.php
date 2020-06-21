<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regcust extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Register_cust");
        //$this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        //header_path//
		$tempuser=$this->session->userdata("nama");
		$query = $this->db->query('SELECT * FROM item');
		$a=$query->num_rows();
		$key=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$this->db->select('*')
		->from('item')
		//->where('')
		->limit(12);
		$query=$this->db->get();
		$this->db->select('*')
		->from('midtrans_item_detail')
		->where('customer',$tempuser);
		$query2=$this->db->get();
		$data['res'] = $query->result();
		$data['cart'] = $query2->result();
		$data['num'] = $a;
		$this->load->model('dataz');
		$b=$this->dataz->cat1();
		$c=$this->dataz->cat();
		$d=$this->dataz->cat2();
		$e=$this->dataz->i1();
		$f=$this->dataz->i2();
		$g=$this->dataz->catx();
		$data['tempu'] = $tempuser;
		$data['cat1'] = $b->result();
		$data['cat'] = $c->result();
		$data['cat2'] = $d->result();
		$data['i1'] = $e->result();
		$data['i2'] = $f->result();
		$data['catx'] = $g->result();
	//header path end //
		//$this->load->view('home/head', $data);
		$this->load->view("home/regc");
		$this->load->view('home/footer', $data);
		
    }
	public function readu()
	{
		$user=$this->uri->segment(3);
		$this->load->model('Register_cust');
		$cheker=$this->Register_cust->check($user);
		$cheker2=$this->Register_cust->checkc($user);
		$data['chekz'] = $cheker->result();
		$data['chekz2'] = $cheker2->result();
		$data['chekx'] = $user;
		$this->load->view('lg/Checku2', $data);
		//$checku = $this->input->post('check',TRUE);
		//$this->Register_cust->check($checku);
	}
    public function add()
    {
	$data2 = array(
        'customer' => $it2
		);
	$this->db->where('midtrans_id', $it);
	$this->db->update('midtrans_item_detail', $data2);
	$file_name = $this->input->post('file_name',TRUE);
	$cust = $this->input->post('cust',TRUE);
	//$this->Register_cust->save($lg,$cust);
	$config['upload_path']          = './ct/image';
	$config['allowed_types']        = 'gif|jpg|png';
	//$config['max_size']             = 100;
	//$config['max_width']            = 1024;
	//$config['max_height']           = 768;
	$this->load->library('upload', $config);
	$this->upload->do_upload('imgc');
	$upload_data = $this->upload->data(); 
	$file_name = $upload_data['file_name'];
	$this->Register_cust->save($cust,$file_name);
	$this->session->set_flashdata('success', 'Regristration Complete'); 	
    $this->load->helper('url');
    redirect('login');         
    }
	
 

   
}