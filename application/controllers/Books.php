<?php

class Books  extends CI_Controller {

	public function index() {

        $data['title'] = 'Book List';
        
        $data['books'] = $this->bookmodel->getBooks();

        /*  DEBUG 
        echo '<pre>';
        print_r ($data['books']);
        echo '</pre>';
        */

		$this->load->view('templates/header');
		$this->load->view('books/index', $data);
		$this->load->view('templates/footer');

	}

	public function create() {
		// Check if Login

		if(!$this->session->userdata('loggedIn')) {
			redirect('users/login');
		}
		$data['title'] = 'Ajoutez un Livre';

		$data['categories'] = $this->bookmodel->getCategories();

		// FORM VALIDATION
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() == FALSE) { 
			$this->load->view('templates/header');
			$this->load->view('books/create', $data);
			$this->load->view('templates/footer');

		} else {


			// UPLOAD IMAGE

			// RENAMING THE IMG FILE
			$newImgName = time() . rand(0, 9999) . "." . pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);

			$config['upload_path']          = './assets/booksfile/covers';     // './upload/images';
			$config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
			$config['file_name']        =  $newImgName ;
			// $config['max_size']             = 0;
			
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()){
				$errors = array('error' => $this->upload->display_errors());
			} else {

				$data = array('upload_data' => $this->upload->data());
				$postImage = $newImgName; 
				//$post_image = $_FILES['userfile']['name'];
			}  
			
			//  UPLOAD PDF FILE
			// RENAMING THE PDF  FILE
			// FOR SOME REASON  THIS $_FILES['image_url']['name'] IS ADDING THE  FILE_URL FIELD: IT IS WORKING WELL ALTHOUGH
			$newPdfName = time() . rand(0, 9999) . "." . pathinfo($_FILES['image_url']['name'], PATHINFO_EXTENSION);
			

            $config2['upload_path']		=  './assets/booksfile/files';                //   'upload/',
			$config2['allowed_types']	=  'pdf|PDF';
			$config2['max_size']		= 50000;
			$config2['file_name'] 		= $newPdfName;      // WE MUST USE :  'file_name' => $newPdfName
				// 'max_size'=>0,


			// $config2 = $newPdfName;

			$this->upload->initialize($config2);

			if(!$this->upload->do_upload('image_url')){
				$errors = array('error' => $this->upload->display_errors());

            }
            else
            {
                    // $data = array('upload_data' => $this->upload->data());
					// $this->load->view('upload_success', $data);
					$data = array('upload_data' => $this->upload->data());
					$postPdf = $newPdfName;
			} 

			$this->bookmodel->createBook($postImage, $postPdf); 
			$this->session->set_flashdata('msg', 'Your Book has been added Successfully!!');			
			redirect('books');

		}

	}

}
