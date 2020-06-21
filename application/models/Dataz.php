<?php 
 
class dataz extends CI_Model{

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function showy($id){
    $this->db->select('*')
    ->from('item')
    ->join('vendor', 'item.idv = vendor.idv', 'inner')
    ->join('category', 'item.idcat  = category.idcat', 'inner')
    ->where('idi',$id)
    ->limit(1);
    return $this->db->get();
	}
	function cat(){
    $this->db->select('*')
    ->from('category');
    //->limit(4);
    return $this->db->get();
	}
	function countz(){
	return $this->db->query("SELECT COUNT(*) FROM item WHERE status = 'ready'");
	}
	function catx(){
    return $this->db->query("SELECT * FROM category WHERE idcat > 2  ORDER BY idcat");
    //return $this->db->();
    }
	function cat1(){
    return $this->db->query("SELECT * FROM category limit 1");
    //return $this->db->();
    }
	function cat2(){
    return $this->db->query("SELECT * FROM category WHERE idcat > 4  ORDER BY idcat limit 4 ");
    //return $this->db->();
    }
    function i1(){
    return $this->db->query("SELECT * FROM item INNER JOIN vendor ON item.idv=vendor.idv INNER JOIN category ON item.idcat=category.idcat WHERE status = 'ready' ORDER BY idi DESC limit 50");
    //return $this->db->();
	}
	function i2(){
    return $this->db->query("SELECT * FROM item WHERE status='ready' limit 12");
    //return $this->db->();
	}
	function ucheck($user){
    $this->db->select('*')
    ->from('customer')
	->where('u_c',$user);
    //->limit(1);
    return $this->db->get();
	}
	function midcheck($user){
	$rule = "no";
    $this->db->select('*')
    ->from('midtrans_item_detail')
	->join('item', 'item.idi = midtrans_item_detail.id', 'inner')
	->where('customer',$user)
	->where('payable',$rule);
    //->limit(1);
    return $this->db->get();
	}
	function search($key,$lim,$pae){
    $this->db->select('*')
    ->from('item')
	->where('status','ready')
    ->join('vendor', 'item.idv = vendor.idv', 'inner')
    ->join('category', 'item.idcat  = category.idcat', 'inner')
    ->like('n_item',$key, 'both')
	//->or_like('price',$key, 'both')
	//->or_like('n_vendor',$key, 'both')
	//->or_like('n_cat',$key, 'both')
	->limit($pae,$lim);
    return $this->db->get();
 
}    
	public function uup($item,$user)
    {
	   $item = new stdClass;
       $post = $this->input->post();
	   $item->n_cust = $post["n_cust"];
	   $item->contact = $post["contact"];
       $item->alamat = $post["alamat"];
	   $item->phone = $post["phone"];
	   $this->db->where('u_c',$user);
       $this->db->update('customer', $item);
	}
	function showx($user){
	$rulez = "no";
    $this->db->select('*')
	->from('midtrans_item_detail')
    ->where('customer',$user)
	->where('payable',$rulez);
	//->limit(1);
    return $this->db->get();
	}
	public function midtrans_transaksi($filter_data) {
    $this->db->insert('midtrans_transaction', $filter_data);
	//return $this->db->get();
}
//	public function midtrans_d_e($filter_detail) {
//    $this->db->update('midtrans_transaction', $filter_data);
	//return $this->db->get();
//}
	function showz($user){
    $this->db->select('*')
    ->from('customer')
    ->where('u_c',$user);
	//->limit(1);
    return $this->db->get();
	}
}