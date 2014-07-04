<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller
{
	// private $url = 'https://buy.itunes.apple.com/verifyReceipt';
	private $url = 'https://sandbox.itunes.apple.com/verifyReceipt';

	public function check_receipt()
	{
		$raw_post_data = file_get_contents('php://input', 'r');
		$inputParam = json_decode($raw_post_data);
		
		header('Content-type: application/json');
		if(!empty($inputParam))
		{
			$identifier = $inputParam->identifier;
			$receipt = $inputParam->receipt;
			
			if(!empty($identifier) && !empty($receipt))
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

				$json = json_decode($result);
				if($json && $json->status == '0')
				{
					$this->load->config('product_items');
					$data = $this->config->item('product_items');
					$items = $data[$identifier];

					if(!empty($items))
					{
						echo json_encode(array(
							'command'	=>	'checkReceipt',
							'code'		=>	1001,
							'identifier'=>	$identifier,
							'receipt'	=>	$result,
							'items'		=>	$items
						));
					}
					else
					{
						echo json_encode(array(
							'command'	=>	'checkReceipt',
							'code'		=>	1404
						));
					}
				}
				else
				{
					echo json_encode(array(
						'command'	=>	'checkReceipt',
						'code'		=>	1403
					));
				}
			}
			else
			{
				echo json_encode(array(
					'command'	=>	'checkReceipt',
					'code'		=>	1998
				));
			}
		}
		else
		{
			echo json_encode(array(
				'command'	=>	'checkReceipt',
				'code'		=>	1999
			));
		}
	}
}