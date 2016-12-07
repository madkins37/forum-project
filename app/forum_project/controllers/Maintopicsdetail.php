<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintopicsdetail extends CI_Controller {

	public function index()
	{
    $topicID =  $this->uri->segment(3);
    $id = $this->input->get('id');
    $id = 1;

		$query = $this->db->select('*')
					  ->from('threads')
                      ->where('threadTopicID = '.$topicID)
                      ->join('users','userID = threadUserID')
											->get();

		$result = $query->result();

		$data = array(
			'threads' => $result,
      'topicID' => $topicID
		);
		$this->load->view('maintopicsdetail',$data);
	}



}
