<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activity extends CI_Controller
{

	public function download_code()
	{
		$raw_post_data = file_get_contents('php://input', 'r');
		$inputParam = json_decode($raw_post_data);
		
		header('Content-type: application/json');
		if(!empty($inputParam))
		{
			$code = $inputParam->code;
			$idfa = $inputParam->idfa;

			if(!empty($code) && !empty($idfa))
			{
				$this->load->model('mcode');
				$parameter = array(
					'idfa'		=>	$idfa
				);
				$result = $this->mcode->read($parameter);
				if(empty($result))
				{
					$parameter = array(
						'code'		=>	$code
					);
					$result = $this->mcode->read($parameter);
					if(!empty($result))
					{
						$row = $result[0];
						if($row->selected == '0')
						{
							echo json_encode(array(
								'command'	=>	'activityDownloadCode',
								'code'		=>	1400
							));
						}
						elseif($row->disabled == '1')
						{
							echo json_encode(array(
								'command'	=>	'activityDownloadCode',
								'code'		=>	1401
							));
						}
						else
						{
							$activity_code = $this->config->item('activity_code');
							if(!empty($activity_code[$row->type]))
							{
								$parameter = array(
									'disabled'	=>	1,
									'idfa'		=>	$idfa
								);
								$this->mcode->update($code, $parameter);

								echo json_encode(array(
									'command'	=>	'activityDownloadCode',
									'code'		=>	1001,
									'items'		=>	$activity_code[$row->type]
								));
							}
							else
							{
								echo json_encode(array(
									'command'	=>	'activityDownloadCode',
									'code'		=>	1405
								));
							}
						}
					}
					else
					{
						echo json_encode(array(
							'command'	=>	'activityDownloadCode',
							'code'		=>	1404
						));
					}
				}
				else
				{
					echo json_encode(array(
						'command'	=>	'activityDownloadCode',
						'code'		=>	1403
					));
				}
			}
			else
			{
				echo json_encode(array(
					'command'	=>	'activityDownloadCode',
					'code'		=>	1998
				));
			}
		}
		else
		{
			echo json_encode(array(
				'command'	=>	'activityDownloadCode',
				'code'		=>	1999
			));
		}
	}
}