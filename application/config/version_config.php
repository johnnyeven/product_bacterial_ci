<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['version_config'] = array(
	'products'		=>	array(
		'version'		=>	'20140725',
		'command'		=>	'requestProductIds',
		'url'			=>	'http://b2.profzone.net/configuration/product_id'
	),
	'virtual_const'	=>	array(
		'version'		=>	'20140708',
		'command'		=>	'requestVirtualConst',
		'url'			=>	'http://b2.profzone.net/configuration/virtual'
	),
	'score_board'	=>	array(
		'version'		=>	'20140829',
		'command'		=>	'requestScoreBoard',
		'url'			=>	'http://b2.profzone.net/configuration/score_board'
	),
	'ad'			=>	array(
		'version'		=>	'20140710',
		'command'		=>	'requestAd',
		'url'			=>	'http://b2.profzone.net/configuration/ad'
	),
	'share_reward'	=>	array(
		'version'		=>	'20140731',
		'command'		=>	'requestShareReward',
		'url'			=>	'http://b2.profzone.net/configuration/share_reward'
	),
	'activity'		=>	array(
		'version'		=>	'20140731',
		'command'		=>	'requestActivity',
		'url'			=>	'http://b2.profzone.net/configuration/activity'
	)
);