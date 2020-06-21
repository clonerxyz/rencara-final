<?php 
 
class Hp extends CI_Controller{
	public function __construct() {
        parent:: __construct();
		$params = array('server_key' => 'SB-Mid-server-bkiM9Ek-ub7ReDyFIcVSDE-S', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->model('dataz');
		$this->load->model('Input_tr');
        $this->load->helper('url');
        $this->load->model('Datac');
        $this->load->library("pagination");
		$this->load->model("Register_cust");
		
    }
	function index(){
		$data_session = array(
				'nama' => rand ( 10000 , 99999 ),
				'status' => ""
				);
		$this->session->set_userdata($data_session);
		redirect(base_url("hp/mainpage"));
	}
	public function mainpage(){
		$tempuser=$this->session->userdata("nama");
		$query = $this->db->query('SELECT * FROM item');
		$a=$query->num_rows();
		$key=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$this->db->select('*')
		->from('item')
		->where('status','ready')
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
		$this->load->view('home/index', $data);
	}
	public function search(){
		//header_path//
		$tempuser=$this->session->userdata("nama");
		$query = $this->db->query('SELECT * FROM item');
		$a=$query->num_rows();
		$key=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$this->db->select('*')
		->from('item')
		->where('status','ready')
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
	$key=$this->uri->segment(3);
	//$key = $this->input->post('search',TRUE);
	$lim=$this->uri->segment(4);
	$pae=$this->uri->segment(5);
	$this->load->model('dataz');
	$fs=$this->dataz->search($key,$lim,$pae);
	$data['find'] = $fs->result();
	$data['key'] = $key;
	$data['lim'] = $lim ;
	$data['pae'] = $pae + 10;
	$this->load->view('home/head', $data);
	$this->load->view('home/search', $data);
	$this->load->view('home/footer', $data);
	}
	public function category(){
	//header_path//
		$tempuser=$this->session->userdata("nama");
		$query = $this->db->query('SELECT * FROM item');
		$a=$query->num_rows();
		$key=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$this->db->select('*')
		->from('item')
		->where('status','ready')
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
	$key=$this->uri->segment(3);
	$lim=$this->uri->segment(4);
	$this->db->select('*')
    ->from('item')
	->join('vendor', 'item.idv = vendor.idv', 'inner')
    ->join('category', 'item.idcat  = category.idcat', 'inner')
    ->where('item.idcat',$key)
	->where('status','ready')
	->limit($lim);
	$query=$this->db->get();
	$this->db->select('*')
		->from('category')
		->where('idcat',$key)
		->limit(1);
	$query2=$this->db->get();
	$data['res3'] = $query2->result();
	$data['res2'] = $query->result();
	$data['key'] = $key;
	$data['lim'] = $lim;
	$data['pae'] = $lim + 6;
	//$this->load->helper('');
	$this->load->view('home/head', $data);
	$this->load->view('home/cat', $data);
	$this->load->view('home/footer', $data);
	}
	public function num(){
		$query = $this->db->query('SELECT * FROM item');
		$a=$query->num_rows();
		$key=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$this->db->select('*')
		->from('item')
		->where('status','ready')
		->limit($start,$key);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$data['num'] = $a;
		
		$this->load->view('homesa', $data);

		
	}
	public function input()
    {
		$id = $this->input->post('id');
		$idit = $this->input->post('idit');
		$price = $this->input->post('price');
		$quantity = $this->input->post('quantity');
 		$name = $this->input->post('name');
		$vendor = $this->input->post('vendor');
		$customer = $this->input->post('customer');
		$payable = $this->input->post('payable');
		$midtrans_id = $this->input->post('midtrans_id');
		$data = array(
			'id' => $id,
			'idit' => $idit,
			'price' => $price,
			'quantity' => $quantity,
			'name' => $name,
			'customer' => $customer,
			'payable' => $payable,
			'midtrans_id' => $midtrans_id,
			'vendor' => $vendor
			);
		$this->Input_tr->save($data,'midtrans_item_detail');
		$this->session->set_flashdata('success', 'item added to cart'); 	
		$this->load->helper('url');
		redirect('hp/mainpage');        
    }
	public function delcart(){
		$key=$this->uri->segment(3);
		$this->db->where('idd', $key);
		$this->db->delete('midtrans_item_detail');
		$this->session->set_flashdata('success', 'item deleted'); 	
		$this->load->helper('url');
		redirect('hp/mainpage');     
	}
	public function dess(){
		session_destroy();
	}
	public function header() {
		$tempuser=$this->session->userdata("nama");
		$query = $this->db->query('SELECT * FROM item');
		$a=$query->num_rows();
		$key=$this->uri->segment(3);
		$start=$this->uri->segment(4);
		$this->db->select('*')
		->from('item')
		->where('status','ready')
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
		$this->load->view('home/head', $data);
	}
	public function footer() {
		
		$this->load->view('home/footer');
	}
	public function regcust()
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
		$this->load->view('lg/Checku', $data);
		//$checku = $this->input->post('check',TRUE);
		//$this->Register_cust->check($checku);
	}
    public function add()
    {
	$ula=$this->input->post('u_c');
	$code = $this->session->userdata("nama");
	$data2 = array(
        'customer' => $ula
		);
	$this->db->where('customer', $code);
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