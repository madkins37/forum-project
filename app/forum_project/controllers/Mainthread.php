<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainthread extends CI_Controller {

  public function index()

  {
    $threadID =  $this->uri->segment(4);
    $this->load->model('Comment_model');


    $id = $this->input->get('id');
    $id = 1;

    $query = $this->db->select('*')
                      ->from('comments')
                      ->where('commentThreadID =' .$threadID .' AND commentReplyID IS NULL'  )
                      ->join('users','userID = commentUserID')
                      ->order_by('commentDateCreated','ASC')
                      ->get();

    $result = $query->result_array();

    $query = $this->db->select('*')
                      ->from('threads')
                      ->where('threadID = '.$threadID)
                      ->get();
    
    $threadResult = $query->result();
    $thread = reset($threadResult);
    $data = array(
      'threadID' => $threadID,
      'thread' => $thread,
      'commments' => $result,
      'commentModel' => $this->Comment_model
    );
    $this->load->view('mainthread', $data);
  }

  public function create() 
  {
    $user = empty($_SESSION['username']) ? "" : $_SESSION['username'];

    if($user == "") {
      $this->load->view('pleaseSignIn');
    } else {
      $topicID =  $this->uri->segment(3);
      $this->load->helper('url');
      $this->load->view('createThread', array(
        'topicID' => $topicID
      ));
    }
  }

  public function submit()
  {
    $topicID =  $this->uri->segment(3);
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
			'threadID' => 0,
			'threadUserID' => $id,
			'threadTitle' => $title,
      'threadTopicID' => $topicID,
			'threadDescription' => $description,
      'threadFeatured' => false
		);
    $this->db->set('threadDateCreated', 'NOW()', FALSE);
    $this->db->insert('threads', $submitData);

		$this->load->view('threadSubmitted');
  }

  public function submitComment()
  {
    $comment = $this->input->post('comment');
		$threadID = $this->input->post('threadID');
    $replyID = $this->input->post('replyID');

    if($replyID == "") {
      $replyID = null;
    }

		$query = $this->db->select('userID')
    									->from('users')
    									->where('userName', $_SESSION['username'])
    									->limit(1)
											->get();
		
		$result = $query->result();
		$id = reset($result)->userID;

		$submitData = array(
			'commentID' => 0,
			'commentUserID' => $id,
			'commentThreadID' => $threadID,
      'commentContent' => $comment,
			'commentReplyID' => $replyID,
		);
    $this->db->set('commentDateCreated', 'NOW()', FALSE);
    $this->db->insert('comments', $submitData);

    $this->load->model('Comment_model');

		$query = $this->db->select('*')
                      ->from('comments')
                      ->where('commentThreadID =' .$threadID .' AND commentReplyID IS NULL'  )
                      ->join('users','userID = commentUserID')
                      ->order_by('commentDateCreated','ASC')
                      ->get();

    $result = $query->result_array();

    $query = $this->db->select('*')
                      ->from('threads')
                      ->where('threadID = '.$threadID)
                      ->get();
    
    $threadResult = $query->result();
    $thread = reset($threadResult);

    $data = array(
      'threadID' => $threadID,
      'thread' => $thread,
      'commments' => $result,
      'commentModel' => $this->Comment_model
    );
    $this->load->view('mainthread', $data);
  }

}
