<?php

class Admin extends CI_Controller {
	public function home() {


		$data['title'] = 'home';  // FUNCTION capital letter

		$this->load->view('admin/templates/header');
		$this->load->view('admin/pages/home', $data);
		$this->load->view('admin/templates/footer');
	}

}
