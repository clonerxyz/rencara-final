<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cust extends CI_Controller {
	 //public $item_details = '';
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
		if($this->session->userdata('status') != "user"){
			redirect(base_url("unauthorized"));
		}
		global $filter;
    }
	function logout(){
		$user=$this->session->userdata('nama');
		$custe = array(
				"s_login" => "idle"
		);
		$this->db->where('u_c',$user)->update('customer', $custe);
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
	public function search(){
	$this->load->model('dataz');
	$c=$this->dataz->cat();
	$data['cat'] = $c->result();
	$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
	$user = $this->session->userdata("nama");
	$user = $this->session->userdata("nama");
	$this->load->model('dataz');
	$mid=$this->dataz->midcheck($user);
	$data['midz'] = $mid->result();
	$this->load->model('dataz');
	$key=$this->uri->segment(3);
	//$key = $this->input->post('search',TRUE);
	$lim=$this->uri->segment(4);
	$pae=$this->uri->segment(5);
	$this->load->model('dataz');
	$fs=$this->dataz->search($key,$lim,$pae);
	$this->db->select('*')
	->from('customer')
	->where('u_c',$user);
	$query = $this->db->get();
	$data['custz'] = $query->result();
	$data['find'] = $fs->result();
	$data['key'] = $key;
	$data['lim'] = $lim ;
	$data['pae'] = $pae + 10;
	$this->load->view('cust/s', $data);
	}
	public function cat(){
	$this->load->model('dataz');
	$c=$this->dataz->cat();
	$data['cat'] = $c->result();
	$this->load->view('cust/c', $data);
	}
    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "cust";
		$query = $this->db->query('SELECT * FROM item WHERE status="ready"');
		$a=$query->num_rows();
		$config["total_rows"] = $a;
		//$config["total_rows"] = 99999;
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div style="padding-left:10%;"class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active" ><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
		$this->load->model('dataz');
		$c=$this->dataz->cat();
		$data['cat'] = $c->result();
        $this->pagination->initialize($config);
		$page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
		$user = $this->session->userdata("nama");
		$user = $this->session->userdata("nama");
		$this->load->model('dataz');
		$mid=$this->dataz->midcheck($user);
		$data['midz'] = $mid->result();
		$this->load->model('dataz');
		$uck=$this->dataz->ucheck($user);
		$this->db->select('*')
		->from('customer')
		->where('u_c',$user);
		$query = $this->db->get();
		$data['custz'] = $query->result();
        $data["links"] = $this->pagination->create_links();
        $data['cust'] = $this->Datac->get_item($config["per_page"], $page);
		$data['ucheck'] = $uck->result();
        $this->load->view('cust/index', $data);
    }
	public function item(){
	$id=$this->uri->segment(3);
	$this->load->model('dataz');
	$item_detail=$this->dataz->showy($id);
	$data['itemy'] = $item_detail->result();
	//foreach ($item_detail as $key);
	$this->load->view('cust/v_detail', $data);
 
    }
	public function uupdate(){
	$this->load->view('cust/update');
	}
	function uup(){
		$user = $this->session->userdata("nama");
		$item = $this->input->post('item',TRUE);
		$this->load->model('dataz');
		$this->dataz->uup($item,$user);
		$this->session->set_flashdata('success', 'Update profile Success'); 	
		$this->load->helper('url');
		redirect('/cust/index');
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
		$this->session->set_flashdata('success', 'item added to checkout'); 	
		$this->load->helper('url');
		redirect('cust');        
    }
	public function midtrans_box(){
	
	$this->load->view('cust/midtrans_box');
 
    }
	public function checkout(){
	$user = $this->session->userdata("nama");
	$this->db->select('*')
	->from('customer')
	->where('u_c',$user);
	$query = $this->db->get();
	$data['custz'] = $query->result();
	$this->load->model('dataz');
	$mid=$this->dataz->midcheck($user);
	$data['midz'] = $mid->result();
	$this->load->view('cust/checkout', $data);
 
    }
	 public function token()
    {
		$user = $this->session->userdata("nama");
		$this->load->model('dataz');
		$midtrans_box = $this->dataz->showx($user);
		$cust_field = $this->dataz->showz($user);
		$amnt=0;
		foreach($midtrans_box->result() as $row) {
			$amnt+= $row->price * $row->quantity;
			//$name= $row->idit $row->name;
			$b[]= array('id' => $row->idit,'price' => $row->price,'quantity' => $row->quantity,'name' => $row->name);
		}
		foreach($cust_field->result() as $rowy) {
			$d= array('first_name' => $rowy->u_c,'last_name' => $rowy->n_cust,'email' => $rowy->contact,'address' => $rowy->alamat);
			$c = array('first_name' => $rowy->u_c,'last_name' => $rowy->n_cust,'email' => $rowy->contact,'phone' => $rowy->phone,'shipping_address' => $d);
			
		}
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $amnt, // no decimal allowed for creditcard
		);
        $credit_card['secure'] = true;
        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 60
        );
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $b,
            'customer_details'   => $c,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );
		
		//var_dump ($transaction_data);
		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		
		error_log($snapToken);
		echo $snapToken;
		
}
    

    public function finish()
    {
	$user = $this->session->userdata("nama");
	//$order_id = 1064617692;
	$data = json_decode($this->input->post('result_data'));
    //print_r($data);
	$filter_data = array(
			"c_name" => $user,
            "status_code" => $data->status_code,
            "status_message" => $data->status_message,
            "transaction_id" => $data->transaction_id,
			"order_id" => $data->order_id,
            "gross_amount" => $data->gross_amount,
            "payment_type" => $data->payment_type,
			"transaction_time" => $data->transaction_time,
            "transaction_status" => $data->transaction_status,
            //"bill_key" => $data->bill_key,
			//"biller_code" => $data->biller_code,
            "pdf_url" => $data->pdf_url
           );
       //Call the save method
		$this->dataz->midtrans_transaksi($filter_data);
		$detail=$this->input->post('idd');
		$user=$this->session->userdata("nama");
		$payable="process";
		$this->db->select('payable','midtrans_id')
		->from('midtrans_item_detail')
		->where('customer',$user)
		//->where('idd',$detail);
		->where('midtrans_id',1);
		$query = $this->db->get();
		foreach($query->result() as $row) {
		$filter_detail = array(
				//"customer" => $user,
				"payable" => $payable,
				"midtrans_id" => $data->order_id
		);
		$this->db->where('customer',$user)->where('midtrans_id',1)->update('midtrans_item_detail', $filter_detail);
		}
		
		//$this->db->where('customer', $user);
		//$this->db->delete('midtrans_item_detail');
		//$this->dataz->midtrans_d_e($filter_detail);
		$this->session->set_flashdata('success', $data->status_message,); 	
		$this->load->helper('url');
		redirect('cust');
    }
	public function delcart(){
		$key=$this->uri->segment(3);
		$this->db->where('idd', $key);
		$this->db->delete('midtrans_item_detail');
		$this->session->set_flashdata('success', 'item deleted'); 	
		$this->load->helper('url');
		redirect('cust/checkout');     
	}
	public function transaksi(){
	$filter = NULL;
	$user = $this->session->userdata("nama");
	$mid=$this->dataz->midcheck($user);
	$data['midz'] = $mid->result();
	$this->load->model('dataz');
	$key=$this->uri->segment(3);
	//$key = $this->input->post('search',TRUE);
	$lim=$this->uri->segment(4);
	$pae=$this->uri->segment(5);
	//$this->load->model('dataz');
	$fs=$this->dataz->search($key,$lim,$pae);
	$this->db->select('*')
	->from('customer')
	->where('u_c',$user);
	$query = $this->db->get();
	$data['custz'] = $query->result();
	$data['find'] = $fs->result();
	$data['key'] = $key;
	$data['filter'] = $filter;
	$data['lim'] = $lim ;
	$data['pae'] = $pae + 10;
	$this->load->model('dataz');
	$c=$this->dataz->cat();
	$data['cat'] = $c->result();
	
	$this->db->select('*')
    ->from('midtrans_transaction')
	->join('midtrans_item_detail', 'midtrans_transaction.order_id = midtrans_item_detail.midtrans_id', 'inner')
	
    ->where('customer',$user);
	$query=$this->db->get();
	$this->db->select('*')
	->from('order_plan')
	->where('customer',$user);
	$que2 = $this->db->get();
	$data['ord'] = $que2->result();
	$data['res'] = $query->result();
	$this->load->view('cust/transaksi', $data);
	}
	function updatetrans() {
		$this->db->select('order_id')
		->from('midtrans_transaction');
		$query = $this->db->get();
		foreach($query->result() as $row) {
		$status[] = $this->midtrans->status($row->order_id);
		$filter = $status;
		}
		//var_dump ($filter);
		foreach($filter as $filt=>$item ){
		$filter[$filt] = (array)$item;
		$it = $filter[$filt]['order_id'];
		$it2 = $filter[$filt]['transaction_status'];
		$data = array(
        'transaction_status' => $it2
		);
		$this->db->where('order_id', $it);
		$this->db->update('midtrans_transaction', $data);
		$data2 = array(
        'payable' => $it2
		);
		$this->db->where('midtrans_id', $it);
		$this->db->update('midtrans_item_detail', $data2);
		echo "<script>setTimeout(function(){window.location.href='newpage.html'},5000);</script>";
		redirect('cust/transaksi'); 
	}
	}
	public function pdf()
	{
		$this->load->library('PdfGenerator');
		
		//$user = $this->session->userdata("nama");
		$key=$this->uri->segment(3);
		$this->db->select('*')
		->from('midtrans_transaction')
		->join('midtrans_item_detail', 'midtrans_transaction.order_id = midtrans_item_detail.midtrans_id', 'inner')
		->where('order_id',$key);
		$query=$this->db->get();
		$data['key'] = $key;
		$data['res'] = $query->result();
 
	    $html = $this->load->view('cust/transaksi-inv', $data, true);
	    
	    $this->pdfgenerator->generate($html,$key);
		//redirect('cust/transaksi');
	}
	public function editprof()
	{
		$this->load->model('dataz');
		$c=$this->dataz->cat();
		$data['cat'] = $c->result();
		$user = $this->session->userdata("nama");
		$mid=$this->dataz->midcheck($user);
		$data['midz'] = $mid->result();
		$this->db->select('*')
		->from('customer')
		->where('u_c',$user);
		$query=$this->db->get();
		
		$data['res'] = $query->result();
		//$this->session->set_flashdata('success', 'Data Berhasil di simpan');
		$this->load->view('cust/edit', $data);
		
	}
	public function eprf()
	{
		//$config['upload_path']          = './ct/img';
		//$config['allowed_types']        = 'gif|jpg|png';
		//$this->load->library('upload', $config);
		$n = $this->input->post('n_cust');
		$c = $this->input->post('contact');
		$a = $this->input->post('alamat');
		$p = $this->input->post('phone');
		$i = $this->input->post('id');
		$z = $this->input->post('img');
		//$id = $this->input->post('n_cust');
		//echo $id;
		//$this->upload->do_upload('img');
		//$upload_data = $this->upload->data();
		//$file_name = $upload_data['file_name'];
		$data = array(
		'n_cust' => $n,
		'contact' => $c,
		'alamat' => $a,
		'phone' => $p 

		);
		$this->db->where('idc', $i);
		$this->db->update('customer', $data);
		$this->session->set_flashdata('success', 'Data Berhasil di simpan');
		redirect('cust/editprof');
	}
	public function eprfi()
	{
		$config['upload_path']          = './ct/img';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|JGP|PNG|JPEG|SVG|svg';
		$config['max_size']             = 100000000;
		$this->load->library('upload', $config);
		$id = $this->input->post('id');
		$this->upload->do_upload('img');
		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];
		$data = array(
		'imgc' => $file_name

		);
		$this->db->where('idc', $id);
		$this->db->update('customer', $data);
		$this->session->set_flashdata('success', 'Data Berhasil di simpan');
		redirect('cust/editprof');	
	}
	public function eprpw() {
		$pw = $this->input->post('pw');
		$id = $this->input->post('id');
		$pwenc = base64_encode($pw);
		$data = array (
		'p_c' => $pwenc
		);
		$this->db->where('idc', $id);
		$this->db->update('customer', $data);
		$this->session->set_flashdata('success', 'password berhasil di ubah');
		redirect('cust/editprof');
	}
	
	public function prosesorder(){
		$d=$this->uri->segment(3);
		$user = $this->session->userdata("nama");
		$this->db->select('*')
		->from('order_plan')
		->where('ido',$d);
		$qu3=$this->db->get();
		$data['res'] = $qu3->result();
		$role = $qu3->result();
		$user = $this->session->userdata("nama");
		$mid=$this->dataz->midcheck($user);
		$data['midz'] = $mid->result();
		$this->db->select('*')
		->from('customer')
		->where('u_c',$user);
		$query = $this->db->get();
		$data['custz'] = $query->result();
		foreach ($role as $n){
			$notif = "Re : ".$n->subject."";
		};
		$nsearch = str_replace('"','',$notif); 
		$this->db->select('*')
		->from('order_plan')
		->where('subject',$nsearch);
		$qu4=$this->db->get();
		$data['notif'] = $qu4->result();
		$this->load->model('dataz');
		$c=$this->dataz->cat();
		$data['cat'] = $c->result();
		foreach ($role as $r )
		{
			$subject=$r->subject;
		}
		if ($subject === "Ask Tanggal sewa order number : ".$r->order_id."") {
			$this->load->view('cust/lookord', $data);
		}
		else {
			$this->load->view('cust/lookorde', $data);
		}
	}
	public function sentrep(){
		$d=$this->uri->segment(3);
		$s = $this->input->post('subject');
		$o = $this->input->post('order_id');
		$v = $this->input->post('vendor');
		$c = $this->input->post('customer');
		$t = $this->input->post('isi_tiket');
		//$z = $this->input->post('imgv');
		$data = array(
		'subject' => $s,
		'order_id' => $o,
		'vendor' => $v,
		'customer' => $c,
		'isi_tiket' => $t 

		);
		//$this->db->where('idv', $i);
		$this->db->insert('order_plan', $data);
		redirect('cust/transaksi');
	}
}