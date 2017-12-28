<?php

class Users extends CI_Controller { 
	public function register() {
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('nickname', 'Nickname', 'required|callback_check_nickname_exists');
		$this->form_validation->set_rules('mail', 'Mail', 'required|callback_check_mail_exists');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required');

		if($this->form_validation->run()  === FALSE) { 
			$this->load->view('templates/header');
			$this->load->view('users/register', $data);
			$this->load->view('templates/footer'); 			
		} else { 
			$encryptedPassword = md5($this->input->post('password'));
			$this->usermodel->register($encryptedPassword); 

			//SET MESSAGE 
			$this->session->set_flashdata('msg', 'Now You are registered and can Log in Anytime!!');
			// $data['msg'] = '<h1> Now You are registered and Can Log in!!  </h1>';
			
			redirect('books');
							 
		}
  
	}

	public function login() {
		$data['title'] = 'Sign Up';

		$this->form_validation->set_rules('nickname', 'Nickname', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() === FALSE) { 
 
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer'); 	
		} else {
			$nickname = $this->input->post('nickname');
			$password = md5($this->input->post('password'));

			$userId = $this->usermodel->login($nickname, $password);

			// Check if User Exists
			if($userId){ 
				// Create session
				$userData = array(
					'id'		=> $userId,
					'nickname' 	=> $nickname, 
					'loggedIn'	=> true
				);  

				// SET MESSAGE
				$this->session->set_userdata($userData);
				$this->session->set_flashdata('msg', 'Now You are Logged in!!!!');				
				// $data['msg'] =  'Now You are Logged in!!';
				redirect('books');
			} else { 
				// $data['msg'] = 	'Login is invalid!!';
				$this->session->set_flashdata('error', 'Login is invalid!!');				
				redirect('users/login');				
			}
		}
	} 

	//  LOG USER OUT
	public function logout() {
		//UNSET USET DATA
		$this->session->unset_userdata('loggedIn');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nickname'); 

		//SET MESSAGE
		$this->session->set_flashdata('msg', 'Now You are Logged Out!!');
		
		redirect('users/login'); 
	}

	// Check if Nickname exists
	public function check_nickname_exists($nickname){
		$this->form_validation->set_message('check_nickname_exists', 'That Username already exists. Please choose a different one!');
 		if($this->usermodel->check_nickname_exists($nickname)){
			return true;
		} else {
			return false;
		}
	} 

 
	// Check mail exists
	public function check_mail_exists($mail){
		$this->form_validation->set_message('check_mail_exists', 'That email already exists. Please choose a different one!');		
		if($this->usermodel->check_mail_exists($mail)){
			return true;
		} else {
			return false;
		}
	} 

}
