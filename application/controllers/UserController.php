<?php



class UserController extends CI_Controller
{

	public function userProfile()
	{
		$this->load->view('user/profile');
	}


	public function porfolio()
	{
		$this->load->view('user/porfolio');
	}

	public function createPost()
	{
		$this->load->view('user/createPost');
	}
}
