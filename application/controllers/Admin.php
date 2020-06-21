<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-bkiM9Ek-ub7ReDyFIcVSDE-S', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("unauthorized"));
		}
		
	}
	public function __destruct() {  
    $this->db->close();  
	} 
	
	function index(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$qu2= $this->db->from("order_plan")->count_all_results();
		$qu3= $this->db->from("item")->count_all_results();
		$qu4= $this->db->from("customer")->count_all_results();
		$qu5= $this->db->from("vendor")->count_all_results();
		$this->db->select('*')
		->from('midtrans_transaction');
		$qu6 = $this->db->get();
		$data['img'] = $qu1->result();
		$data['ord'] = $qu2;
		$data['itm'] = $qu3;
		$data['cust'] = $qu4;
		$data['vendor'] = $qu5;
		$data['midz'] = $qu6->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/footer',$data);
	}
	function logout(){
		$user=$this->session->userdata('nama');
		$admine = array(
				"s_login" => "idle"
		);
		$this->db->where('u_a',$user)->update('admin', $admine);
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	function updatetrans() {
		$this->db->select('order_id')
		->from('midtrans_transaction');
		$query = $this->db->get();
		foreach($query->result() as $row) {
		$status[] = $this->midtrans->status($row->order_id);
		$filter = $status;
		}
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
		
	}
	$this->db->close();
	$this->load->view('admin/load',$data);
	}
	function balanceven() {
		
		
	}
	function editprof() {
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/editprof',$data);
		$this->load->view('admin/footer',$data);
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
		'img' => $file_name

		);
		$this->db->where('ida', $id);
		$this->db->update('admin', $data);
		$this->session->set_flashdata('success', 'ubah image success');
		redirect('admin/editprof');	
	}
	public function eprf()
	{
		$n = $this->input->post('name');
		$c = $this->input->post('phone');
		$a = $this->input->post('email');
		$i = $this->input->post('id');
		
		$data = array(
		'n_admin' => $n,
		'contact' => $c,
		'email' => $a

		);
		$this->db->where('ida', $i);
		$this->db->update('admin', $data);
		$this->session->set_flashdata('success', 'Data Berhasil di simpan');
		redirect('admin/editprof');
	}
	public function eprpw() {
		$pw = $this->input->post('pw');
		$id = $this->input->post('id');
		$pwenc = base64_encode($pw);
		$data = array (
		'p_a' => $pwenc
		);
		$this->db->where('ida', $id);
		$this->db->update('admin', $data);
		$this->session->set_flashdata('success', 'password berhasil di ubah');
		redirect('admin/editprof');
	}
	public function user(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$this->db->select('*')
		->from('customer');
		$qu2 = $this->db->get();
		$data['img'] = $qu1->result();
		$data['usr'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/user',$data);
		$this->load->view('admin/footer',$data);
	}
	function infocust() {
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$e=$this->uri->segment(3);
		//$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('customer')
		->where('idc',$e);
		$qu2 = $this->db->get();
		$data['info'] = $qu2->result();
		foreach ($qu2->result() as $para){
		$a= $this->db->where('customer',$para->u_c)->from("midtrans_item_detail")->count_all_results();
		$data['citem'] = $a;
		};
		foreach ($qu2->result() as $para){
		$b= $this->db->where('customer',$para->u_c)->where('payable','settlement')->from("midtrans_item_detail")->count_all_results();
		$data['citem2'] = $b;
		};
		foreach ($qu2->result() as $para){
		$c= $this->db->where('customer',$para->u_c)->where('payable','expire')->from("midtrans_item_detail")->count_all_results();
		$data['citem3'] = $c;
		};
		$this->load->view('admin/header',$data);
		$this->load->view('admin/infocust',$data);
		$this->load->view('admin/footer',$data);
	}
	function editcust(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$e=$this->uri->segment(3);
		//$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('customer')
		->where('idc',$e);
		$qu2 = $this->db->get();
		$data['info'] = $qu2->result();
		foreach ($qu2->result() as $para){
		$a= $this->db->where('customer',$para->u_c)->from("midtrans_item_detail")->count_all_results();
		$data['citem'] = $a;
		};
		foreach ($qu2->result() as $para){
		$b= $this->db->where('customer',$para->u_c)->where('payable','settlement')->from("midtrans_item_detail")->count_all_results();
		$data['citem2'] = $b;
		};
		foreach ($qu2->result() as $para){
		$c= $this->db->where('customer',$para->u_c)->where('payable','expire')->from("midtrans_item_detail")->count_all_results();
		$data['citem3'] = $c;
		};
		$this->load->view('admin/header',$data);
		$this->load->view('admin/editcust',$data);
		$this->load->view('admin/footer',$data);
	}
	public function custprw() {
		$pw = $this->input->post('pw');
		$id = $this->input->post('id');
		$pwenc = base64_encode($pw);
		$data = array (
		'p_c' => $pwenc
		);
		$this->db->where('idc', $id);
		$this->db->update('customer', $data);
		$this->session->set_flashdata('success', 'password berhasil di ubah');
		redirect('admin/user');
	}
	public function rcust() {
		$e=$this->uri->segment(3);
		//$admin = $this->session->userdata("nama");
		$this->db->where('idc', $e);
		$this->db->delete('customer');
		$this->session->set_flashdata('success', 'password berhasil di ubah');
		redirect('admin/user');
	}
	public function vendor(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$this->db->select('*')
		->from('vendor');
		$qu2 = $this->db->get();
		$data['img'] = $qu1->result();
		$data['vendor'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/vendor',$data);
		$this->load->view('admin/footer',$data);
	}
	function infovendor() {
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$e=$this->uri->segment(3);
		//$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('idv',$e);
		$qu2 = $this->db->get();
		$data['info'] = $qu2->result();
		foreach ($qu2->result() as $para){
		$a= $this->db->where('vendor',$para->u_v)->from("midtrans_item_detail")->count_all_results();
		$data['citem'] = $a;
		};
		foreach ($qu2->result() as $para){
		$b= $this->db->where('vendor',$para->u_v)->where('payable','settlement')->from("midtrans_item_detail")->count_all_results();
		$data['citem2'] = $b;
		};
		foreach ($qu2->result() as $para){
		$c= $this->db->where('vendor',$para->u_v)->where('payable','expire')->from("midtrans_item_detail")->count_all_results();
		$data['citem3'] = $c;
		};
		$d= $this->db->where('idv',$e)->from("item")->count_all_results();
		$data['citem4'] = $d;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/infovendor',$data);
		$this->load->view('admin/footer',$data);
	}
	function editvendor(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$e=$this->uri->segment(3);
		//$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('vendor')
		->where('idv',$e);
		$qu2 = $this->db->get();
		$data['info'] = $qu2->result();
		$this->db->select('v_status')
		->from('vendor')
		->where('idv',$e);
		$qu3 = $this->db->get();
		$data['status'] = $qu3->result();
		foreach ($qu2->result() as $para){
		$a= $this->db->where('vendor',$para->u_v)->from("midtrans_item_detail")->count_all_results();
		$data['citem'] = $a;
		};
		foreach ($qu2->result() as $para){
		$b= $this->db->where('vendor',$para->u_v)->where('payable','settlement')->from("midtrans_item_detail")->count_all_results();
		$data['citem2'] = $b;
		};
		foreach ($qu2->result() as $para){
		$c= $this->db->where('vendor',$para->u_v)->where('payable','expire')->from("midtrans_item_detail")->count_all_results();
		$data['citem3'] = $c;
		};
		$d= $this->db->where('idv',$e)->from("item")->count_all_results();
		$data['citem4'] = $d;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/editvendor',$data);
		$this->load->view('admin/footer',$data);
	}
	function dissvendor() {
		$e=$this->uri->segment(3);
		$data = array(
		'v_status' => 'belum di acc'

		);
		$this->db->where('idv', $e);
		$this->db->update('vendor', $data);
		$this->session->set_flashdata('success', 'account berhasil di disable');
		redirect('admin/vendor'.$id);
	}
	function envendor() {
		$e=$this->uri->segment(3);
		$data = array(
		'v_status' => 'acc'

		);
		$this->db->where('idv', $e);
		$this->db->update('vendor', $data);
		$this->session->set_flashdata('success', 'account berhasil di enable');
		redirect('admin/vendor'.$id);
	}
	public function vendprw() {
		$pw = $this->input->post('pw');
		$id = $this->input->post('id');
		$pwenc = base64_encode($pw);
		$data = array (
		'p_v' => $pwenc
		);
		$this->db->where('idv', $id);
		$this->db->update('vendor', $data);
		$this->session->set_flashdata('success', 'password berhasil di ubah');
		redirect('admin/vendor');
	}
	public function vendr() {
		$e=$this->uri->segment(3);
		//$admin = $this->session->userdata("nama");
		$this->db->where('idv', $e);
		$this->db->delete('vendor');
		$this->session->set_flashdata('success', 'password berhasil di ubah');
		redirect('admin/vendor');
	}
	public function category() {
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->db->select('*')
		->from('category');
		//->where('u_a',$admin);
		$qu2 = $this->db->get();
		$data['cat'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/infocat',$data);
		$this->load->view('admin/footer',$data);
	}
	public function catiframe(){
		$e=$this->uri->segment(3);
		$this->db->select('*')
		->from('item')
		->join('category', 'category.idcat = item.idcat', 'inner')
		->where('item.idcat',$e);
		$qu2 = $this->db->get();
		$data['cat'] = $qu2->result();
		$this->db->select('*')
		->from('category');
		//->where('item.idcat',$e);
		$qu3 = $this->db->get();
		$data['cat2'] = $qu3->result();
		$this->load->view('admin/catifram',$data);
	}
	public function movecat(){
		$a = $this->input->post('idcat');
		$b = $this->input->post('iditem');
		$data = array (
		'idcat' => $a
		);
		$this->db->where('idi', $b);
		$this->db->update('item', $data);
		$this->session->set_flashdata('success', 'item moved');
		redirect('admin/catiframe');
	}
	public function ecat(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->db->select('*')
		->from('category');
		//->where('item.idcat',$e);
		$qu3 = $this->db->get();
		$data['cat'] = $qu3->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/editcat',$data);
		$this->load->view('admin/footer',$data);
	}
	public function rcat(){
		$e=$this->uri->segment(3);
		$a= $this->db->where('idcat',$e)->from("item")->count_all_results();
		if ($a){
			$admin = $this->session->userdata("nama");
			$this->db->select('*')
			->from('admin')
			->where('u_a',$admin);
			$qu1 = $this->db->get();
			$data['img'] = $qu1->result();
			$data['cat'] = $a;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/catnnull',$data);
			$this->load->view('admin/footer',$data);
		}
		else{
		$this->db->where('idcat', $e);
		$this->db->delete('category');
		$this->session->set_flashdata('success', 'categori deleted');
		redirect('admin/ecat');
		}
	}
	public function infocat(){
		$e=$this->uri->segment(3);
		$a= $this->db->where('idcat',$e)->from("item")->count_all_results();
		$admin = $this->session->userdata("nama");
			$this->db->select('*')
			->from('admin')
			->where('u_a',$admin);
			$qu1 = $this->db->get();
			$data['img'] = $qu1->result();
			$this->db->select('*')
			->from('category')
			->where('idcat',$e);
			$qu2 = $this->db->get();
			$data['cat'] = $qu2->result();
			$data['item'] = $a;
			$this->load->view('admin/header',$data);
			$this->load->view('admin/catlook',$data);
			$this->load->view('admin/footer',$data);
	}
	public function editcat() {
		$e=$this->uri->segment(3);
		$admin = $this->session->userdata("nama");
			$this->db->select('*')
			->from('admin')
			->where('u_a',$admin);
			$qu1 = $this->db->get();
			$data['img'] = $qu1->result();
			$this->db->select('*')
			->from('category')
			->where('idcat',$e);
			$qu2 = $this->db->get();
			$data['cat'] = $qu2->result();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/catedit',$data);
			$this->load->view('admin/footer',$data);
	}
	public function catnewn(){
		$a = $this->input->post('id');
		$b = $this->input->post('name');
		$data = array (
		'n_cat' => $b
		);
		$this->db->where('idcat', $a);
		$this->db->update('category', $data);
		$this->session->set_flashdata('success', 'category edited');
		redirect('admin/ecat');
	}
	public function trans(){
		$this->db->select('order_id')
		->from('midtrans_transaction');
		$query = $this->db->get();
		foreach($query->result() as $row) {
		$status[] = $this->midtrans->status($row->order_id);
		$filter = $status;
		}
		$data['filter'] = $filter;
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/trans',$data);
		$this->load->view('admin/footer',$data);
		$this->db->close();
	}
	public function order(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$e=$this->uri->segment(3);
		$this->db->select('*')
		->from('midtrans_item_detail')
		->join('item', 'item.idi = midtrans_item_detail.id', 'inner')
		->join('customer', 'customer.u_c = midtrans_item_detail.customer', 'left')
		->where('midtrans_id',$e);
		$qu2 = $this->db->get();
		//var_dump ($qu2->result());
		$data['ord'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/orderinfo',$data);
		$this->load->view('admin/footer',$data);
	}
	public function rorder(){
		$e=$this->uri->segment(3);
		$this->db->where('order_id', $e);
		$this->db->delete('midtrans_transaction');
		$this->db->where('midtrans_id', $e);
		$this->db->delete('midtrans_item_detail');
		$this->session->set_flashdata('success', 'order delete success');
		redirect('admin/trans');
	}
	public function orderpro(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->db->select('*')
		->from('order_plan');
		//->where('u_a',$admin);
		$qu2 = $this->db->get();
		$data['pro'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/orderpro',$data);
		$this->load->view('admin/footer',$data);
	}
	public function infoprr(){
		$e=$this->uri->segment(3);
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->db->select('*')
		->from('order_plan')
		->where('ido',$e);
		$qu2 = $this->db->get();
		$data['pro'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/lookprr',$data);
		$this->load->view('admin/footer',$data);
	}
	public function prormv(){
		$e=$this->uri->segment(3);
		$this->db->where('ido', $e);
		$this->db->delete('order_plan');
		$this->session->set_flashdata('success', 'order delete success');
		redirect('admin/orderpro');
	}
	public function fund(){
		$admin = $this->session->userdata("nama");
		$this->db->select('*')
		->from('admin')
		->where('u_a',$admin);
		$qu1 = $this->db->get();
		$data['img'] = $qu1->result();
		$this->db->select('*')
		->from('fund_v');
		//->where('u_a',$admin);
		$qu2 = $this->db->get();
		$data['fund'] = $qu2->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/fund',$data);
		$this->load->view('admin/footer',$data);
	}
	public function sttsfund(){
		$a = $this->input->post('idf');
		$b = $this->input->post('status');
		$data = array (
		'status' => $b
		);
		$this->db->where('idf', $a);
		$this->db->update('fund_v', $data);
		$this->session->set_flashdata('success', 'berhasil acc');
		redirect('admin/fund');
	}
	public function addcat(){
		$a = $this->input->post('n_cat');
		$data = array (
		'n_cat' => $a
		);
		$this->db->insert('category', $data);
		$this->session->set_flashdata('success', 'berhasil acc');
		redirect('admin/ecat');
	}
}