<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Share extends CI_Controller
{
	public function __construct()
	{
		$this->load->helper('url');
	}

	public function wechat()
	{
		redirect('welcome');
	}

	public function weibo()
	{
		redirect('welcome');
	}
}