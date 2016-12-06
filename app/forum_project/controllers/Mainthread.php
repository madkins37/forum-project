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

    $data = array(
      'threadID' => $threadID,
      'commments' => $result,
      'commentModel' => $this->Comment_model
    );
    $this->load->view('mainthread', $data);
  }

}
