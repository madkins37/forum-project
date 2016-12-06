<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

	public function index()
	{
    $id = $this->input->get('id');
    $id = 1;

		$query = $this->db->select('forumTitle, forumDescription, forumDateCreated, topicTitle, topicDescription, topicID, userName')
											->from('forums')
											->join('topics','topicForumID = forumID')
                      ->join('users','topicCreatedByUserID = userID')
                      ->where('forumID = '.$id)
											->get();

		$result = $query->result();

    $forumTitle = array_values($result)[0]->forumTitle;
		$data = array(
			'topics' => $result,
      'forumTitle' => $forumTitle
		);
		$this->load->view('topics',$data);
	}

  public function topic($topicID)
  {
    $this->load->model("Thread_model");
    $this->load->model("Topic_model");
    $data["topic"] = $this->Topic_model->get_topic($topicID)
    $data["threads"] = $this->Thread_model->get_all_threads($topicID);
    $this->load->view->('topic', $data);
  }

}
