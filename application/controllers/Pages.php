<?php

class Pages extends CI_Controller {

	public function view($page = 'home') {
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page);

		// $book1 = '67f5953407e3cdfcfa624084fd829259';
		// $name = 'Warning';
		// $name2 = 'Effective Java';
		// $name3 = 'When Bad Grammar Happens to Goo';

		$data['book1']			= $this->pagemodel->getBooks('The PHP Project Guide');
		$data['book2']			= $this->pagemodel->getBooks('Effective Java');
		$data['book3']			= $this->pagemodel->getBooks('When Bad Grammar Happens to Goo');
		
		/*
		// DEBUG 
        echo '<pre>';
        print_r ($data['book1']);
		echo '</pre>';
		*/
		
		

		        
		$data['totalBooks'] 		= $this->pagemodel->getTotalBooks();
		$data['totalCategories']	= $this->pagemodel->getTotalCategories();


		$this->load->view('templates/header');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');

	}
/*
	public function contact() {
		$data['contact'] = 'Contact';

		$this->load->view('templates/header');
		$this->load->view('pages/contact', $data);
		$this->load->view('templates/header');
	}
	
	public function home($page = 'home') {
		if(!file_exists(APPPATH.'views/admin/pages/'.$page.'.php')) {
			show_404();
		}

		$data['title'] = ucfirst( $page );  // FUNCTION capital letter

		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/'.$page, $data);
		$this->load->view('admin/templates/footer');
	}
*/


}
