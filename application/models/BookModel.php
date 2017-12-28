<?php

class BookModel extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function getBooks($slug = FALSE) {
        // , $limit = FALSE, $offset = FALSE

        /*
        if($limit) {
            $this->db->limit($limit, $offset);
        }
        */

        if($slug === FALSE) {
            $this->db->order_by('book.updated_at', 'DESC'); 


            // JOINT TABLES
            // $this->db->join('category', 'category.id = book.category_id');
            $query = $this->db->get('book');
            return $query->result_array();

        }

        $query = $this->db->get_where('book', array(
            'slug' => $slug));
        return $query->row_array();
    } 

    public function createBook($postImage, $postPdf) {
		$slug = url_title($this->input->post('title'));
		// $id = md5($this->input->post('id'));

		$id = md5(date("ymdhisu"));

		$data = array(
            'name' => $this->input->post('name'),
			// 'slug' => $slug,
			'id' => $id,
			'author' => $this->input->post('author'),
            'description' => $this->input->post('description'),
			'category_id' => $this->input->post('category_id'),
			'release_date' => $this->input->post('release_date'),
			// 'file_url' => $this->input->post('file_url'),
			'file_url' => $postPdf,
            'user_id' => $this->session->userdata('id'),
            'image_url' => $postImage
		);
		
        return $this->db->insert('book', $data);
	}  

	public function getCategories() {
        $this->db->order_by('name');
        $query = $this->db->get('category');
        
        return $query->result_array();  // return the categories as an array				
    }
	
/*	

    public function delete_post($id){
        $image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
        $cwd = getcwd(); // save the current working directory
        $image_file_path = $cwd."\\assets\\images\\posts\\";
        chdir($image_file_path);
        unlink($image_file_name);
        chdir($cwd); // Restore the previous working directory
        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }


    public function update_post() {
        $slug = url_title($this->input->post('title'));
        
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'body' => $this->input->post('body'),
            'category_id' => $this->input->post('category_id')				
        );
        $this->db->where('id',  $this->input->post('id'));	
        return $this->db->update('posts', $data);		
        
   }


    public function get_posts_by_category($category_id){
        $this->db->order_by('posts.id', 'DESC');
        $this->db->join('categories', 'categories.id = posts.category_id');
        $query = $this->db->get_where('posts', array('category_id' => $category_id));
        return $query->result_array();
    }
*/		  

}
