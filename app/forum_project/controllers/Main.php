<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

public function index()
  {
    $query = $this->db->select('forumID, forumTitle, forumDescription, userName, forumDateCreated')
                      ->from('forums')
                      ->join('users','userID = forumPrimaryAdminID')
                      ->get();

    $result = $query->result();

    $data = array(
      'forums' => $result
    );
    $this->load->view('main',$data);
  }

  public function view($id)
  {
    $query = $this->db->select('forumTitle, forumDescription, userName, forumDateCreated')
                      ->from('forums')
                      ->join('users','userID = forumPrimaryAdminID')
                      ->where('forumID = '.$id)
                      ->get();

    $result = $query->result();

    $data = array(
      'id' => $id,
      'forums' => $result
    );
    $this->load->view('main',$data);
  }

 

}