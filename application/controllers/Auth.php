<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('AuthModel');
    }

	public function login()
	{
        $output = $this->AuthModel->do_login();
		$this->load->view('auth/login',['output'=>$output]);
	}
    public function logout()
{
  session_destroy();
  redirect(base_url());
}
}
