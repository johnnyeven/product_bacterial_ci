<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller
{
	public function coupon()
	{
		header('Content-type: application/json');

		$this->load->model('mcode');
		$parameter = array(
			'selected'		=>	0,
			'disabled'		=>	0
		);
		$result = $this->mcode->read($parameter, null, 1);
		if(!empty($result))
		{
			$row = $result[0];
			$parameter = array(
				'selected'	=>	1
			);
			$this->mcode->update($row->code, $parameter);
			
			echo json_encode(array(
				'command'		=>	'getDownloadCode',
				'code'			=>	1001,
				'download_code'	=>	$row->code
			));
		}
		else
		{
			echo json_encode(array(
				'command'	=>	'getDownloadCode',
				'code'		=>	1404
			));
		}
	}
}