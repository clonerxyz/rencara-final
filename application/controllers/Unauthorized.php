<?php 
 
class Unauthorized extends CI_Controller{
 
	function index(){
		$this->load->view('lg/failauth');
	}
}