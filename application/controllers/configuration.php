<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Controller
{
	public function product_id()
	{
		$this->load->config('product_items');
		$data = $this->config->item('product_identifiers');

		header('Content-type: application/json');
		echo json_encode($data);
	}
}