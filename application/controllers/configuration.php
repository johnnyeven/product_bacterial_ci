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
		$this->load->config('virtual_items');
		$version_data = $this->config->item('version_config');
		$products = $this->config->item('product_identifiers');
		$upgrade = $this->config->item('upgrade_items');
		$virtual = $this->config->item('virtual_items');
		$score_board = $this->config->item('enabled_scoreboard');
		$ad = $this->config->item('enabled_ad');

		$result = array(
			'command'			=>	'requestGlobalConfig',
			'products'			=>	array(
				'version'			=>	$version_data['products'],
				'result'			=>	$products
			),
			'virtual_const'		=>	array(
				'version'			=>	$version_data['virtual_const'],
				'result'			=>	$virtual
			),
			'upgrade_const'		=>	array(
				'version'			=>	$version_data['upgrade_const'],
				'result'			=>	$upgrade
			),
			'score_board'		=>	array(
				'version'			=>	$version_data['score_board'],
				'result'			=>	$score_board
			),
			'ad'				=>	array(
				'version'			=>	$version_data['ad'],
				'result'			=>	$ad
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
			'products'	=>	array(
				'version'	=>	$version_data['products'],
				'result'	=>	$data
			)
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function virtual()
	{
		$this->load->config('version_config');
		$this->load->config('virtual_items');
		$version_data = $this->config->item('version_config');
		$data = $this->config->item('virtual_items');

		$result = array(
			'command'		=>	'requestVirtualConst',
			'upgrade_const'	=>	array(
				'version'		=>	$version_data['virtual_const'],
				'result'		=>	$data
			)
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function upgrade()
	{
		$this->load->config('version_config');
		$this->load->config('upgrade_items');
		$version_data = $this->config->item('version_config');
		$data = $this->config->item('upgrade_items');

		$result = array(
			'command'		=>	'requestUpgradeConst',
			'upgrade_const'	=>	array(
				'version'		=>	$version_data['upgrade_const'],
				'result'		=>	$data
			)
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function score_board()
	{
		$this->load->config('version_config');
		$version_data = $this->config->item('version_config');
		$score_board = $this->config->item('enabled_scoreboard');

		$result = array(
			'command'		=>	'requestScoreBoard',
			'score_board'	=>	array(
				'version'		=>	$version_data['score_board'],
				'result'		=>	$score_board
			)
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}

	public function ad()
	{
		$this->load->config('version_config');
		$version_data = $this->config->item('version_config');
		$ad = $this->config->item('enabled_ad');

		$result = array(
			'command'		=>	'requestAd',
			'ad'			=>	array(
				'version'		=>	$version_data['ad'],
				'result'		=>	$ad
			)
		);

		header('Content-type: application/json');
		echo json_encode($result);
	}
}