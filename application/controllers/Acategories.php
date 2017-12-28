<?php

class Acategories  extends CI_Controller {

	public function index() {

        $data['title'] = 'Liste des livres';  

		$this->load->view('admin/templates/header');
		$this->load->view('admin/categories/categories', $data); 
		$this->load->view('admin/templates/footer');

    }

    public function edit() {
        
        $data['title'] = 'Liste des livres';  

        $this->load->view('admin/templates/header');
        $this->load->view('admin/categories/edit', $data); 
        $this->load->view('admin/templates/footer');

    }
}