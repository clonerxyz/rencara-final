<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Input_tr extends CI_Model
{
   function save($data,$table){
   $this->db->insert($table,$data);
	}
    }