<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller
{
	// private $url = 'https://buy.itunes.apple.com/verifyReceipt';
	private $url = 'https://sandbox.itunes.apple.com/verifyReceipt';

	public function check_receipt()
	{
		$raw_post_data = file_get_contents('php://input', 'r');
		$inputParam = json_decode($raw_post_data);
		
		$receipt = $inputParam->receipt;
		
		if(!empty($receipt))
		{
			$parameter = array(
					'receipt-data'	=>	$receipt
			);
			$parameter = json_encode($parameter);
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $parameter);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json'
			));
			$result = curl_exec($ch);
			
			header('Content-type: application/json');
			echo json_encode(array(
				'command'	=>	'checkReceipt',
				'code'		=>	1,
				'receipt'	=>	$result
			));
		}
		else
		{
			echo json_encode(array(
				'command'	=>	'checkReceipt',
				'code'		=>	0
			));
		}
	}
}