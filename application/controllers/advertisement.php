<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advertisement extends CI_Controller
{
	public function get()
	{
		$idfa = $this->input->get('idfa');
		redirect('http://moesister.taobao.com/');
	}
}