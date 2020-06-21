<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpw extends CI_Controller {
    public function index()
    {
        $this->load->view('lg/forgotpw');
    }
    public function email()
    {
        $this->load->model('m_login');
        $email= $this->input->post('email');
        $emcombine= str_replace("@","|||||",$email);
        $where = array(
			'contact' => $email
            );
            $cek = $this->m_login->cek_login("customer",$where)->num_rows();
            $cek2 = $this->m_login->cek_login("vendor",$where)->num_rows();
            if($cek > 0 ){
            $pw = array(
                    "p_c" => "reset"
            );
            $this->db->where('contact',$email)->update('customer', $pw);
            $config = [
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'protocol'  => 'smtp',
                'smtp_host' => 'panel.rencara.com',
                'smtp_user' => 'admin_email@panel.rencara.com',  // Email gmail
                'smtp_pass'   => 'Qwe123!@#',  // Password gmail
                //'smtp_crypto' => 'ssl',
                'smtp_port'   => 587,
                'crlf'    => "\r\n",
                'newline' => "\r\n"
            ];
            $this->load->library('email', $config);
            $this->email->from('admin_email@panel.rencara.com', 'panel.rencara.com');
            $this->email->to($email); // Ganti dengan email tujuan
            $this->email->subject('FORGOT PASSWORD',$email);
            $this->email->message("HAI  " .$email. " .<br><br> Klik UNTUK MERESET PASSWORD
            <form  action='store.rencara.com/forgotpw/stageone' method='post'>
            <input type='hidden' name='email' value=".$email."><br>
            <input type='submit' value='Klik here'>
            </form> <br/><br/>JIKA TIDAK BERFUNGSI CLICK LINK INI : <a href='http://store.rencara.com/forgotpw/stagethree/".$emcombine."'>HERE</a>
            ");
            if ($this->email->send()) {
                echo "sended cek your email";
            } else {
            echo 'KAMU TIDAK DAPAT MENGAKSES HALAMAN INI';
            }
            }
            elseif($cek2 > 0 ){
                $pw = array(
                        "p_v" => "reset"
                );
                $this->db->where('contact',$email)->update('vendor', $pw);
                $config = [
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'protocol'  => 'smtp',
                    'smtp_host' => 'panel.rencara.com',
                    'smtp_user' => 'admin_email@panel.rencara.com',  // Email gmail
                    'smtp_pass'   => 'Qwe123!@#',  // Password gmail
                    //'smtp_crypto' => 'ssl',
                    'smtp_port'   => 587,
                    'crlf'    => "\r\n",
                    'newline' => "\r\n"
                ];
                $this->load->library('email', $config);
                $this->email->from('admin_email@panel.rencara.com', 'panel.rencara.com');
                $this->email->to($email); // Ganti dengan email tujuan
                $this->email->subject('FORGOT PASSWORD',$email);
                $this->email->message("HAI  " .$email. " .<br><br> Klik UNTUK MERESET PASSWORD
                <form  action='store.rencara.com/forgotpw/stageonev' method='post'>
                <input type='hidden' name='email' value=".$email."><br>
                <input type='submit' value='Klik here'>
                </form> <br/><br/>JIKA TIDAK BERFUNGSI CLICK LINK INI : <a href='http://store.rencara.com/forgotpw/stagethree/".$emcombine."'>HERE</a>
                ");
                if ($this->email->send()) {
                    echo "sended cek your email";
                } else {
                echo 'KAMU TIDAK DAPAT MENGAKSES HALAMAN INI';
                }
                }
            else {
                $this->load->view('lg/failauth');    
            }
    }
    public function stageone()
    {
        //$email = 0;
        $this->load->model('m_login');
        $email= $this->input->post('email');
        $this->db->select('contact')->from('customer')->where('contact',$email);
		$queryx = $this->db->get();
		foreach($queryx->result() as $rowz) {
		$state = $rowz->contact;
		}
        $data['em'] = $email;
        if(empty($email))
        {
            $this->load->view('lg/failauth');
        }
        elseif($email == $state)
        {
            $this->load->view('lg/stageone',$data);
        }
        else {
            $this->load->view('lg/failauth');
        }
        
    }
    public function stagetwo()
    {
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $pwenc = base64_encode($password);
        if(empty($email))
        {
            $this->load->view('lg/failauth');
        }
       else {
        $uppw = array(
            "p_c" => $pwenc
        );
       $this->db->where('contact',$email)->update('customer', $uppw);
       $this->session->set_flashdata('success', 'UPDATE PASSWORD SUCCESSFULL'); 	
        $this->load->helper('url');
        redirect('login'); 
       }
    }
    public function stageonev()
    {
        //$email = 0;
        $this->load->model('m_login');
        $email= $this->input->post('email');
        $this->db->select('contact')->from('vendor')->where('contact',$email);
		$queryx = $this->db->get();
		foreach($queryx->result() as $rowz) {
		$state = $rowz->contact;
		}
        $data['em'] = $email;
        if(empty($email))
        {
            $this->load->view('lg/failauth');
        }
        elseif($email == $state)
        {
            $this->load->view('lg/stageonev',$data);
        }
        else {
            $this->load->view('lg/failauth');
        }
        
    }
    public function stagetwov()
    {
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $pwenc = base64_encode($password);
        if(empty($email))
        {
            $this->load->view('lg/failauth');
        }
       else {
        $uppw = array(
            "p_v" => $pwenc
        );
       $this->db->where('contact',$email)->update('vendor', $uppw);
       $this->session->set_flashdata('success', 'UPDATE PASSWORD SUCCESSFULL'); 	
        $this->load->helper('url');
        redirect('login'); 
       }
    }
    public function stagethree()
    {
        $this->load->model('m_login');
        $key=$this->uri->segment(3);
        $keypassed= str_replace("%7C%7C%7C%7C%7C","@",$key);
        $wherez = array(
			'contact' => $keypassed
        );
        $s1 = $this->m_login->cek_login("customer",$wherez)->num_rows();
        $s2 = $this->m_login->cek_login("vendor",$wherez)->num_rows();
        if($s1 > 0 ){
        $data['em'] = $keypassed;
        $this->load->view('lg/stageone',$data);
        }
        elseif( $s2 > 0) {
            $data['em'] = $keypassed;
            $this->load->view('lg/stageonev',$data);   
        }
        else{
            $this->load->view('lg/failauth');  
        }
    }
}