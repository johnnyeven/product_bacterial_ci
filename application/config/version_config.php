<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['version_config'] = array(
	'products'		=>	array(
		'version'		=>	'20140708',
		'command'		=>	'requestProductIds',
		'url'			=>	'http://b.profzone.net/configuration/product_id'
	),
	'upgrade_const'	=>	array(
		'version'		=>	'20140708',
		'command'		=>	'requestUpgradeConst'
		'url'			=>	'http://b.profzone.net/configuration/upgrade'
	)
);