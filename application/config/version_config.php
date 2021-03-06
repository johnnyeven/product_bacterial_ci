<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['version_config'] = array(
	'products'		=>	array(
		'version'		=>	'20140710',
		'command'		=>	'requestProductIds',
		'url'			=>	'http://b.profzone.net/configuration/product_id'
	),
	'virtual_const'	=>	array(
		'version'		=>	'20140708',
		'command'		=>	'requestVirtualConst',
		'url'			=>	'http://b.profzone.net/configuration/virtual'
	),
	'upgrade_const'	=>	array(
		'version'		=>	'20140708',
		'command'		=>	'requestUpgradeConst',
		'url'			=>	'http://b.profzone.net/configuration/upgrade'
	),
	'score_board'	=>	array(
		'version'		=>	'20140731',
		'command'		=>	'requestScoreBoard',
		'url'			=>	'http://b.profzone.net/configuration/score_board'
	),
	'ad'	=>	array(
		'version'		=>	'20140711',
		'command'		=>	'requestAd',
		'url'			=>	'http://b.profzone.net/configuration/ad'
	)
);