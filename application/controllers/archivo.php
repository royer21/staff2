<?php

class Archivo extends CI_Controller {

	public function index() {
		$this->load->view('archivo/form');
	}

	public function do_upload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'pdf|jpg';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()) {
			$data['error'] = $this->upload->display_errors();
			$this->load->view('archivo/form', $data);
		} else {
			$data['success'] = $this->upload->data();
			$this->load->view('archivo/success', $data);
		}
	}
}


