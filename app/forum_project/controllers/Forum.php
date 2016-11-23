<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
  
	public function index()
	{
		$this->load->view('forums');
	}

	public function create()
	{
		$this->load->view('createForum');
	}

	public function submit()
	{
		$title = $this->input->post('title');
		$description = $this->input->post('description');

		$query = $this->db->select('userID')
    									->from('users')
    									->where('userName', $_SESSION['username'])
    									->limit(1)
											->get();
		
		$result = $query->result();
		$id = reset($result)->userID;

		$submitData = array(
			'forumID' => 0,
			'forumPrimaryAdminID' => $id,
			'forumTitle' => $title,
			'forumDescription' => $description
		);
    $this->db->set('forumDateCreated', 'NOW()', FALSE);
    $this->db->insert('forums', $submitData);

		$data = array(
			'title' => $title,
			'description' => $description
		);
		$this->load->helper('url');
		$this->load->view('submitForum', $data);
	}
}
