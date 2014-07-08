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
		$this->load->config('upgrade_items');
		$version_data = $this->config->item('version_config');
		$products = $this->config->item('product_identifiers');
		$upgrade = $this->config->item('upgrade_items');

		$result = array(
			'command'			=>	'requestGlobalConfig',
			'products'			=>	array(
				'version'			=>	$version_data['products']['version'],
				'result'			=>	$products
			),
			'upgrade_const'		=>	array(
				'version'			=>	$version_data['upgrade_const']['version'],
				'result'			=>	$upgrade
			)
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function product_id()
	{
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