<?php

class Abooks  extends CI_Controller {

	public function index() {

        $data['title'] = 'Liste des livres';  
        
        // $data['books'] = $this->bookmodel->getBooks();

        /*  DEBUG 
        echo '<pre>';
        print_r ($data['books']);
        echo '</pre>'; 
        */ 

		$this->load->view('admin/templates/header');
		$this->load->view('admin/books/index', $data); 
		$this->load->view('admin/templates/footer');

    }

    public function edit() {
        
        $data['title'] = 'Liste des livres';  

        $this->load->view('admin/templates/header');
        $this->load->view('admin/books/edit', $data); 
        $this->load->view('admin/templates/footer');

    }
}