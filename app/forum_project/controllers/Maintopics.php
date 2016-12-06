<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintopics extends CI_Controller {

  public function index()
  {
    $id = $this->input->get('id');
    $id = 1;

    $query = $this->db->select('*')
                      ->from('topics')
                      ->get();

    $result = $query->result();

    $data = array(
      'topics' => $result,
    );
    $this->load->view('maintopics', $data);
  }

}
