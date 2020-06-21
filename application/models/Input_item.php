<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Input_item extends CI_Model
{
    public $t1 = "item";
    public $idi;
	public $idit;
	public $idv;
    public $n_item;
    public $detail;
    public $price;
    public $idcat;
	public $imgi;
    public $file_name;
	public $status;
	


    
	public function save($item,$file_name)
    {
	   $item = new stdClass;
       $post = $this->input->post();
	   $item->idi = $post["idi"];
	   $item->idit = $post["idit"];
	   $item->idv = $post["idv"];
	   $item->n_item = $post["n_item"];
	   $item->detail = $post["detail"];
       $item->price = $post["price"];
	   $item->idcat = $post["idcat"];
	   $item->status = $post["status"];
       $item->imgi = $file_name;
       $this->db->insert($this->t1, $item);
	   echo $file_name;
	   

	  
	}
	public function update($item,$file_name)
    {
	   $item = new stdClass;
       $post = $this->input->post();
	   //$item->idk = $post["idi"];
	   //$item->idv = $post["idv"];
	   $item->n_item = $post["n_item"];
	   $item->detail = $post["detail"];
       $item->price = $post["price"];
	   $item->idcat = $post["idcat"];
	   $item->status = $post["status"];
	   $item->item_avail = $post["d2"];
	   $item->item_n_avail = $post["d1"];
       //$item->imgi = $file_name;
	   $this->db->where('idi',$post["idi"]);
       $this->db->update($this->t1, $item);
	   echo $file_name;
	   

	  
	}
	public function check()
	{
		
		$this->db->select('*')
		->from('category');
		//->limit('1');
		return $this->db->get();
		
		
    }
	public function checkz($vendor)
	{
		
		$this->db->select('*')
		->from('vendor')
		->where('u_v',$vendor)
		->limit('1');
		return $this->db->get();
		
		
    }
	
}