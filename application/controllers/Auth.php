<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
        parent::__construct();
		
		
	}
    public function login(){
		$this->form_validation->set_rules('username', 'Userame', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	    
		if ($this->form_validation->run() === FALSE){
		     $this->load->view('admin/login');
		}
		else{
			 $data=array(
			         'username'    =>$this->input->post('username'),
				     'password'    =>$this->input->post('password'),
			       );
			 $result=$this->general_model->checkLogin($data);
			 if($result!=0){
				  $session_data = array(
                    'id' => $result['id'],
                    'name' => $result['name'],
                    'username' => $result['username'],
                    'role' => $result['role'], 
                );
                $this->session->set_userdata('admin', $session_data);
				redirect('admin/admin/dashboard');
				 
			}
			else{
				$msg="Invalid username or password !";
				redirect('admin/');
			}
		}
	}
}
