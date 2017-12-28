<?php
class PageModel extends CI_Model {

	public function getBooks($name) {
		$this->db->select('*');
		$this->db->where('name', $name);
		// $q = $this->db->get('my_users_table');
		// if id is unique, we want to return just one row
		// $data = array_shift($q->result_array());
		
		// echo($data['age']);



		$q = $this->db->get('book');
		return $q->result_array();
    } 
 

	public function getTotalBooks() {

		$result = $this->db->get('book');
		return $result->num_rows();
	}

	public function getTotalCategories() {
		$result = $this->db->get('category');
		return $result->num_rows();
	}

}
