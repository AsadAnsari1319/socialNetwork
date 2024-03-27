<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('user/home');
	}

	function loginPage()
	{

		$this->load->view('user/login');
	}

	function Register()
	{

		$this->load->view('user/register');
	}
}
