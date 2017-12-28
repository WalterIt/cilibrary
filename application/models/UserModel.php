<?php
class UserModel extends CI_Model {

	public function register($encryptedPassword) { 

		$id = md5(date("ymdhisu")); 
		$data = array(
			'id' => $id, 
			'nickname' => $this->input->post('nickname'),
			'mail'		=> $this->input->post('mail'),
			'password'	=> $encryptedPassword 
		);

		// Insert User
		return $this->db->insert('user', $data);
	}

	public function login($nickname, $password) {
		$this->db->where('nickname', $nickname);
		$this->db->where('password', $password);

		$result = $this->db->get('user');

		// Check if User Exists
		if($result->num_rows() == 1) {
			return $result->row(0)->id;

		} else {
			return false;
		}

	}

	public function check_nickname_exists($nickname){
		$query = $this->db->get_where('user', array('nickname' => $nickname));
		if(empty($query->row_array())){
			return true;
		} else {
			return false;
		}
	} 

	public function check_mail_exists($mail){
		$query = $this->db->get_where('user', array('mail' => $mail));
		if(empty($query->row_array())){
			return true;
		} else {
			return false;
		}
	} 
	


}
