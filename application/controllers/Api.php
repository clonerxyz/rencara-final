<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		header('Content-Type: application/json');
        //$this->load->model("Register_vend");
        //$this->load->library('form_validation');
    }
	
	public function index()
    {
		echo "untuk mengakses api rencara silahkan kontak ke email clonerxyz@gmail.com";
    }
	public function item()
	{
		$key = 8281982888192882;
		$d=$this->uri->segment(3);
		if ($key == $d){
			$this->db->select('*')
			->from('item')
			->join('vendor', 'vendor.idv = item.idv', 'inner')
			->join('category', 'category.idcat = item.idcat', 'inner');
			$qu2=$this->db->get();
			$res=$qu2->result();
			foreach($res as $r){
				$data = array(
				'item-attribute' => array (
				'idi' => $r->idi,
				'idit' => $r->idit,
				'vendor-detail' => array ('idv' => $r->idv, 'vendor-name' => $r->n_vendor),
				'n_item' => $r->n_item,
				'price' => $r->price,
				'category-detail' => array ('idcat' => $r->idcat, 'vendor-name' => $r->n_cat),
				'imgi' => $r->imgi,
				'status' => $r->status,
				'item_n_avail_before' => $r->item_avail,
				'item_avail_after' => $r->item_n_avail,
				'detail' => $r->detail 
			
			)
		);	
			echo json_encode($data, JSON_PRETTY_PRINT);
			}
		}
		else {
			echo "OJOK MACEM-MACEM COK , NGOPI O SING SUWE , DOLEN MU KURANG ADOH by : clonerxyz";
		}
	}
	public function category()
	{
		$key = 2387287837787282;
		$d=$this->uri->segment(3);
		if ($key == $d){
			$this->db->select('*')
			->from('category');
			//->where('u_c',$user);
			$qu2=$this->db->get();
			$res=$qu2->result();
			foreach($res as $r){
				$data = array(
				'category-attribute' => array (
				'idcat' => $r->idcat,
				'n_cat' => $r->n_cat
				//'detail' => $r->detail 
			)
		);	
		//header('Content-Type: application/json');
			echo json_encode($data, JSON_PRETTY_PRINT);
			}
		}
		else {
			echo "OJOK MACEM-MACEM COK , NGOPI O SING SUWE , DOLEN MU KURANG ADOH by : clonerxyz";
		}
	}
	public function vendor()
	{
		$key = 32828392993899828;
		$d=$this->uri->segment(3);
		if ($key == $d){
			$this->db->select('*')
			->from('vendor');
			//->where('u_c',$user);
			$qu2=$this->db->get();
			$res=$qu2->result();
			foreach($res as $r){
				$data = array(
				'vendor-attribute' => array (
				'idv' => $r->idv,
				'n_vendor' => $r->n_vendor,
				'email' => $r->contact,
				'alamat' => $r->alamat,
				'imgv' => $r->imgv,
				'phone' => $r->phone
				//'detail' => $r->detail 
			)
		);	
		//header('Content-Type: application/json');
			echo json_encode($data, JSON_PRETTY_PRINT);
			}
		}
		else {
			echo "OJOK MACEM-MACEM COK , NGOPI O SING SUWE , DOLEN MU KURANG ADOH by : clonerxyz";
		}
	}
	public function orderprocess()
	{
		$key = 42477828818828828;
		$d=$this->uri->segment(3);
		if ($key == $d){
			$this->db->select('*')
			->from('order_plan');
			//->where('u_c',$user);
			$qu2=$this->db->get();
			$res=$qu2->result();
			foreach($res as $r){
				$data = array(
				'order process-attribute' => array (
				'ido' => $r->ido,
				'subject' => $r->subject,
				'order_id' => $r->order_id,
				'vendor' => $r->vendor,
				'customer' => $r->customer,
				'isi_tiket' => $r->isi_tiket
				//'detail' => $r->detail 
			)
		);	
		//header('Content-Type: application/json');
			echo json_encode($data, JSON_PRETTY_PRINT);
			}
		}
		else {
			echo "OJOK MACEM-MACEM COK , NGOPI O SING SUWE , DOLEN MU KURANG ADOH by : clonerxyz";
		}
	}
}