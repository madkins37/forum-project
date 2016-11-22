<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forums extends CI_Controller {
  
	public function index()
	{
		$this->load->view('forums');
	}

	public function submit()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$data = array(
			'title' => $title,
			'description' => $description
		);
		$this->load->helper('url');
		$this->load->view('forumSubmit', $data);
	}
}
