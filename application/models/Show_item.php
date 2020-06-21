<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Show_item extends CI_Model
{
   
	public function s_vendor($vendor)
	{
		
		$this->db->select('*')
		->from('vendor')
		->where('u_v',$vendor)
		->limit('1');
		return $this->db->get();
		
		
    }
	public function itemlist($idv)
	{
		
		$this->db->select('*')
		->from('item')
		->where('idv',$idv);
		return $this->db->get();
		
		
    }
	public function item_detail($d)
	{
		
		$this->db->select('*')
		->from('item')
		->where('idi',$d)
		->limit('1');
		return $this->db->get();
		
		
    }
	public function item_detail_e($e)
	{
		
		$this->db->select('*')
		->from('item')
		->where('idi',$e)
		->limit('1');
		return $this->db->get();
		
		
    }
	public function item_detail_r($e)
	{
		
	   $this->db->where('idi',$e);
	   $this->db->from('item');
       $this->db->delete();
		
		
		
    }
	
}