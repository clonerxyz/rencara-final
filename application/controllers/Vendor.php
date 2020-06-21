<?php 
 
class Vendor extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("Input_item");
		$this->load->model("Show_item");
		if($this->session->userdata('status') != "vend"){
			redirect(base_url("unauthorized"));
		}
	}
	function logout(){
		//$user=$this->session->userdata('nama');
		//$vende = array(
		//		"s_login" => "idle"
		//);
		//$this->db->where('u_v',$user)->update('vendor', $vende);
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	function itemd(){
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$d=$this->uri->segment(3);
		$di=$this->Show_item->item_detail($d);
		$data['dix'] = $di->result();
		$this->load->view('/vendor/itemd.php', $data);
		
	}
	function iteme(){
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$e=$this->uri->segment(3);
		$de=$this->Show_item->item_detail_e($e);
		$decat=$this->Input_item->check();
		$data['diy'] = $de->result();
		$data['caty'] = $decat->result();
		$this->load->view('/vendor/iteme.php', $data);
		
	}
	function itemr(){
		$e=$this->uri->segment(3);
		$dr=$this->Show_item->item_detail_r($e);
		///$data['diz'] = $dr->result();
		$this->session->set_flashdata('success', 'remove item Success'); 	
		$this->load->helper('url');
		redirect('/vendor/item');
		
	}
	function index(){
		$vendor = $this->session->userdata("nama");
		$a= $this->db->from("item")->join('vendor', 'vendor.idv = item.idv', 'inner')->where('n_vendor',$vendor)->count_all_results();
		$b= $this->db->where('vendor',$vendor)->from("order_plan")->like('subject','Order Di Proses order number :', 'after')->count_all_results();
		$c= $this->db->from("category")->count_all_results();
		$d= $this->db->where('vendor',$vendor)->from("order_plan")->count_all_results();
		$e= $this->db->where('vendor',$vendor)->from("order_plan")->LIKE('subject','Close Order order number :', 'after')->count_all_results();
		$f= $this->db->where('vendor',$vendor)->from("midtrans_item_detail")->count_all_results();
		$this->db->select('*')
		->from('fund_v')
		->where('status','sudah di acc')
		->where('vendor',$vendor);
		$g=$this->db->get();
		//$g= $this->db->where('vendor',$vendor)->from("midtrans_item_detail")->count_all_results();
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$data['qu1'] = $a;
		$data['qu2'] = $b;
		$data['qu3'] = $c;
		$data['qu4'] = $d;
		$data['qu5'] = $e;
		$data['qu6'] = $f;
		$data['qu7'] = $g->result();
		//$this->load->view('/vendor/header.php',$data);
		$this->load->view('/vendor/index.php', $data);
	}
	function item(){
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$s_v=$this->Show_item->s_vendor($vendor);
		//$data['s_vendor'] = $s_vendor->result();
		foreach($s_v->result() as $row) {
		$idv=$row->idv;
		$iteml=$this->Show_item->itemlist($idv);
		$data['iteml'] = $iteml->result();
		$this->load->view('/vendor/item.php', $data);
		}
	}
	function input(){
		//$vendor = $this->session->userdata("nama");
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$idv=$this->Input_item->checkz($vendor);
		$cat=$this->Input_item->check();
		$data['catz'] = $cat->result();
		$data['catx'] = $idv->result();
		$this->load->view('/vendor/input.php', $data);
		
	}
	function save(){
		$file_name = $this->input->post('file_name',TRUE);
		$item = $this->input->post('item',TRUE);
		$config['upload_path']          = './ct/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->do_upload('imgi');
		$upload_data = $this->upload->data(); 
		$file_name = $upload_data['file_name'];
		$this->Input_item->save($item,$file_name);
		$this->session->set_flashdata('success', 'Input item complete'); 	
		$this->load->helper('url');
		redirect('/vendor/input');
	}
	function update(){
		//$file_name = $this->input->post('file_name',TRUE);
		//$item = $this->input->post('item',TRUE);
		//$config['upload_path']          = './ct/img';
		//$config['allowed_types']        = 'gif|jpg|png';
		//$this->load->library('upload', $config);
		//$this->upload->do_upload('imgi');
		//$upload_data = $this->upload->data(); 
		//$file_name = $upload_data['file_name'];
		$this->Input_item->update($item,$file_name);
		$this->session->set_flashdata('success', 'Edit item Success'); 	
		$this->load->helper('url');
		redirect('/vendor/item');
	}
	public function eii()
	{
		$config['upload_path']          = './ct/img';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$id = $this->input->post('idi');
		$this->upload->do_upload('img');
		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];
		$data = array(
		'imgi' => $file_name

		);
		$this->db->where('idi', $id);
		$this->db->update('item', $data);
		redirect('vendor/iteme/'.$id);	
	}
	function addcate(){
		
		$cate = $this->input->post('catname');
		//$d = "";
		$filter_detail = array(
				//"customer" => $user,
				"n_cat" => $cate
		);
		$this->db->insert('category', $filter_detail);
		$this->session->set_flashdata('success', 'Add category success'); 	
		$this->load->helper('url');
		redirect('/vendor/addcat');
	}
	
	function order(){
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$this->db->select('*')
		->from('midtrans_item_detail')
		->where('vendor',$vendor);
		$qu2=$this->db->get();
		$this->db->select('*')
		->from('midtrans_item_detail')
		->where('vendor',$vendor)
		->where('payable','settlement');
		$qu3=$this->db->get();
		foreach($qu3->result() as $r)
		{
		$o[] = $r->midtrans_id;
		//$p[] = $r->customer;
		$fil1 = $o;
		//$fil2 = $p;
		}
		$a = array_unique($fil1);
		//$b = array_unique($fil2);
		
		$data['resr'] = $a;
		$data['rest'] = $qu2->result();
		//$data['resy'] = $qu2->result();
		if ($fil1 === NULL){
			redirect('vendor');
		}
		else {
		$this->load->view('/vendor/order.php',$data);
		}
	}
	function inc(){
		
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$qu2=$this->db->get();
		$data['res2'] = $qu2->result();
		$user = $this->session->userdata("nama");
		$this->db->select('*')
		->from('midtrans_transaction')
		->where('payable','settlement')
		->join('midtrans_item_detail', 'midtrans_item_detail.midtrans_id = midtrans_transaction.order_id', 'inner')
		->where('vendor',$user);
		$query=$this->db->get();
		$filter=$query->result();
		foreach ($filter as $filt){
			$fund[] = $filt->order_id;
		}
		$d=array_unique($fund);
		foreach ($d as $di){
		$c[] = $di;
		};
		$n = $this->input->post('order_id');
		$this->db->select('*')
		->from('midtrans_transaction')
		->where('order_id',$n);
		$qu3=$this->db->get();
		$this->db->select('*')
		->from('fund_v')
		->where('vendor',$vendor);
		$qu4=$this->db->get();
		$this->db->select('*')
		->from('fund_v')
		->where('status','sudah di acc')
		->where('vendor',$vendor);
		$qu5=$this->db->get();
		$data['out']=$qu3->result();
		$data['stt']=$qu4->result();
		$data['ttl']=$qu5->result();
		$data['res'] = $c;
		if ($fund === NULL){
		redirect('vendor');
		}
		else {
		$this->load->view('/vendor/inc.php',$data);
		}
	}
	function inc2(){
		$a = $this->input->post('order_id');
		$b = $this->input->post('price');
		$c = $this->input->post('vendor');
		$d = $this->input->post('rekening');
		$e = $this->input->post('status');
		$data = array(
		'order_id' => $a,
		'price' => str_replace('Rp.','',$b),
		'vendor' => $c,
		'rekening' => $d,
		'status' => $e 

		);
		//$this->db->where('idv', $i);
		$this->db->insert('fund_v', $data);
		redirect('vendor/inc');
	}
	function addcat(){
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$this->db->select('*')
		->from('category');
		//->where('n_vendor',$vendor);
		$qu2=$this->db->get();
		$data['res2'] = $qu2->result();
		$this->load->view('/vendor/addcat',$data);
	}
	function editprof(){
		$user = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('u_v',$user);
		$query=$this->db->get();
		$data['res'] = $query->result();
		$this->load->view('vendor/editprof', $data);
	}
	public function eprf()
	{
		$n = $this->input->post('n_vendor');
		$c = $this->input->post('contact');
		$a = $this->input->post('alamat');
		$p = $this->input->post('phone');
		$i = $this->input->post('idv');
		$z = $this->input->post('imgv');
		$data = array(
		'n_vendor' => $n,
		'contact' => $c,
		'alamat' => $a,
		'phone' => $p 

		);
		$this->db->where('idv', $i);
		$this->db->update('vendor', $data);
		$this->session->set_flashdata('success', 'data berhasil di simpan');
		redirect('vendor/editprof');	
	}
	public function eprfi()
	{
		$config['upload_path']          = './ct/img';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$id = $this->input->post('idv');
		$this->upload->do_upload('img');
		$upload_data = $this->upload->data();
		$file_name = $upload_data['file_name'];
		$data = array(
		'imgv' => $file_name

		);
		$this->db->where('idv', $id);
		$this->db->update('vendor', $data);
		$this->session->set_flashdata('success', 'data berhasil di simpan');
		redirect('vendor/editprof');	
	}
	public function eprpw() {
		$pw = $this->input->post('pw');
		$id = $this->input->post('id');
		$pwenc = base64_encode($pw);
		$data = array (
		'p_v' => $pwenc
		);
		$this->db->where('idv', $id);
		$this->db->update('vendor', $data);
		$this->session->set_flashdata('success', 'password berhasil di rubah');
		redirect('vendor/editprof');
	}
	public function oprocess() {
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res4'] = $query->result();
		$o = $this->input->post('order_id');
		$this->db->select('*')
		->from('midtrans_item_detail')
		->where('midtrans_id',$o);
		$query=$this->db->get();
		$src = $query->result();
		foreach ($src as $u){
		$user = $u->customer;
		}
		$this->db->select('*')
		->from('customer')
		->where('u_c',$user);
		$qu2=$this->db->get();
		$this->db->select('*')
		->from('order_plan')
		->where('vendor',$vendor);
		$qu3=$this->db->get();
		$data['notif'] = $qu3->result();
		$data['res3'] = $qu2->result();
		$data['res'] = $query->result();
		$data['res2'] = $o;
		//var_dump ($user);
		$this->load->view('vendor/orderprocess.php', $data);
	}
	public function addtiket() {
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
		redirect('vendor/order');
	}
	public function stiket() {
		$d=$this->uri->segment(3);
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$query=$this->db->get();
		$data['res4'] = $query->result();
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('order_plan')
		->where('vendor',$vendor)
		->like('subject',$d);
		$qu3=$this->db->get();
		$data['res'] = $qu3->result();
		
		$this->load->view('vendor/tikets', $data);
	}
	function tiketshow(){
		$d=$this->uri->segment(3);
		$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('order_plan')
		->where('ido',$d);
		$que1=$this->db->get();
		//$vendor = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('n_vendor',$vendor);
		$que2=$this->db->get();
		$data['res'] = $que1->result();
		$data['res4'] = $que2->result();
		$this->load->view('/vendor/tiketshow', $data);
		
	}
	
	function tiketremove(){
		$d=$this->uri->segment(3);
		$vendor = $this->session->userdata("nama");
		$this->db->where('ido',$d);
		$this->db->delete('order_plan');
		redirect('vendor/stiket');
	}
	
}