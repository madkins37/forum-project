<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function index()
  {
    $this->load->view('login');
  }

  public function register()
  {
    $this->load->view('register');
  }

  public function create()
  {
    $username = $this->input->post('username');
		$password = $this->input->post('password');

    $data = array(
      'userId' => 0,
      'userName' => $username,
      'userPassword' => sha1($password),
      'userDateCreated' => 0,
      'userType' => "A"
    );
    
    $this->db->insert('users', $data);

    redirect('home', 'refresh');

  }

	public function login()
	{
    $username = $this->input->post('username');
		$password = $this->input->post('password');

    $this -> db -> select('userID, userName, userPassword');
    $this -> db -> from('users');
    $this -> db -> where('userName', $username);
    $this -> db -> where('userPassword', sha1($password));
    $this -> db -> limit(1);

    $query = $this -> db -> get();

    $this->load->helper('url');
		if($query -> num_rows() == 1)
    {
      $newdata = array(
        'username'  => $username,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($newdata);
      
      redirect('home', 'location');
    }
    else
    {
      redirect('user', 'location');
    }
	}

  public function logout() 
  {
    $newdata = array(
      'username'  => "",
      'logged_in' => FALSE
    );
    $this->load->helper('url');
    $this->session->set_userdata($newdata);
    redirect('home', 'location');
  }
}