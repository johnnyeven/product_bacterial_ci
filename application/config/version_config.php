<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['version_config'] = array(
	'products'		=>	array(
		'version'		=>	'20140710',
		'command'		=>	'requestProductIds',
		'url'			=>	'http://b2.profzone.net/configuration/product_id'
	),
	'virtual_const'	=>	array(
		'version'		=>	'20140708',
		'command'		=>	'requestVirtualConst',
		'url'			=>	'http://b2.profzone.net/configuration/virtual'
	),
	'score_board'	=>	array(
		'version'		=>	'20140725',
		'command'		=>	'requestScoreBoard',
		'url'			=>	'http://b2.profzone.net/configuration/score_board'
	),
	'ad'	=>	array(
		'version'		=>	'20140710',
		'command'		=>	'requestAd',
		'url'			=>	'http://b2.profzone.net/configuration/ad'
	)
);