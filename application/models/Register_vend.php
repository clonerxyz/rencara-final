<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_vend extends CI_Model
{
    //public $t1 = "login";
    public $t2 = "vendor";
    //public $username;
    //public $id;
    public $idv;
    //public $password;
    public $roster = "vend";
    public $n_vendor;
    public $contact;
    public $alamat;
    public $phone;
    public $npwp;
	public $file_name;
	public $u_v;
	public $p_v;
	public $c_v;
	public $status;
	public $ktp;
   
    public function save($cust,$file_name)
    {
	   $vend = new stdClass;
       //$lg = new stdClass;
	   $roster = "vend";
	   $s_login = "idle";
	   //$imgv = "imgv";
	   //$enc = $post["p_v"];
       $post = $this->input->post();
	   //$lg->id = $post["id"];
       //$lg->username = $post["username"];
       //$lg->password = $post["password"];
	   //$lg->roster = $roster ;
	   //$this->db->insert($this->t1, $lg);
	   $vend->idv = $post["idv"];
	   $vend->n_vendor = $post["u_v"];
	   $vend->contact = $post["contact"];
       $vend->alamat = $post["alamat"];
       $vend->phone = $post["phone"];
       //$vend->ktp = $file_name;
	   $vend->npwp = $file_name;
	   $vend->roster = $roster ;
	   $cust->s_login = $s_login ;
	   $vend->u_v= $post["u_v"];
	   $vend->p_v= base64_encode($post["p_v"]);
       $this->db->insert($this->t2, $vend);
	}

	public function check($user)
	{
		
		$this->db->select('u_v')
		->from('vendor')
		->where('u_v',$user)
		->limit(1);
		return $this->db->get();
		
		
    }
	public function checkc($user)
	{
		
		$this->db->select('u_c')
		->from('customer')
		->where('u_c',$user)
		->limit(1);
		return $this->db->get();
		
		
    }
    }