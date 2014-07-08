<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Configuration extends CI_Controller
{
	public function version_config()
	{
		$this->load->config('version_config');
		$data = $this->config->item('version_config');

		$result = array(
			'command'		=>	'requestVersionConfig',
			'result'		=>	$data
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function global_config()
	{
		$this->load->config('version_config');
		$this->load->config('product_items');
		$version_data = $this->config->item('version_config');
		$products = $this->config->item('product_identifiers');

		$result = array(
			'command'			=>	'requestGlobalConfig',
			'products'			=>	array(
				'version'			=>	$version_data['products'],
				'result'			=>	$products
			),	
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function product_id()
	{
		error_reporting(E_ALL);
		$this->load->config('version_config');
		$this->load->config('product_items');
		$version_data = $this->config->item('version_config');
		$data = $this->config->item('product_identifiers');

		$result = array(
			'command'	=>	'requestProductIds',
			'version'	=>	$version_data['products'],
			'products'	=>	$data
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}
}