<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_cust extends CI_Model
{
    //public $t1 = "login";
    public $t2 = "customer";
    //public $username;
    //public $id;
    public $idc;
    //public $password;
    public $roster = "user";
    public $n_cust;
    public $contact;
    public $alamat;
    public $phone;
    public $file_name;
	public $u_c;
	public $p_c;
	public $c_u;
	public $s_login;


    //public function save($lg,$cust)
	public function save($cust,$file_name)
    {
	   $cust = new stdClass;
	   //$file_name = new stdClass;
       //$lg = new stdClass;
	   $roster = "user";
	   $s_login = "idle";
	   //$imga = $cust->imgc = $post["imgc"];
       $post = $this->input->post();
	   //$lg->id = $post["id"];
       //$lg->username = $post["username"];
       //$lg->password = $post["password"];
	   //$lg->roster = $roster ;
	   //$this->db->insert($this->t1, $lg);
	   $cust->idc = $post["idc"];
	   $cust->n_cust = $post["n_cust"];
	   $cust->contact = $post["contact"];
       $cust->alamat = $post["address"];
       $cust->phone = $post["phone"];
       $cust->imgc = $file_name;
	   //$cust->imgc = $imgc;
	   $cust->roster = $roster ;
	   $cust->contact = 1 ;
	   $cust->s_login = $s_login ;
	   $cust->u_c= $post["u_c"];
	   $cust->p_c= base64_encode($post["p_c"]);
       $this->db->insert($this->t2, $cust);
	   
	   

	  
	}
	public function check($user)
	{
		
		$this->db->select('*')
		->from('customer')
		->where('u_c',$user)
		->limit(1);
		return $this->db->get();
		
		
    }
	public function checkc($user)
	{
		
		$this->db->select('*')
		->from('vendor')
		->where('u_v',$user)
		->limit(1);
		return $this->db->get();
		
		
    }
	
}