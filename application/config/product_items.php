<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['product_identifiers'] = array(
	array(
		'productIdentifier'		=>	"net.profzone.bacterial2.gold_pack6",
		'items'					=>	array(
			'gold'					=>	3000
		),
		'sort'					=>	2
	),
	array(
		'productIdentifier'		=>	"net.profzone.bacterial2.gold_pack12",
		'items'					=>	array(
			'gold'					=>	8000,
			'step'					=>	500,
			'uper'					=>	10,
			'killer'				=>	10
		),
		'sort'					=>	1
	),
	array(
		'productIdentifier'		=>	"net.profzone.bacterial2.gold_pack25",
		'items'					=>	array(
			'gold'					=>	20000
		),
		'sort'					=>	3
	),
	array(
		'productIdentifier'		=>	"net.profzone.bacterial2.gold_pack45",
		'items'					=>	array(
			'gold'					=>	40000
		),
		'sort'					=>	4
	),
	array(
		'productIdentifier'		=>	"net.profzone.bacterial2.gold_pack68",
		'items'					=>	array(
			'gold'					=>	60000
		),
		'sort'					=>	5
	),
	array(
		'productIdentifier'		=>	"net.profzone.bacterial2.gold_pack128",
		'items'					=>	array(
			'gold'					=>	150000
		),
		'sort'					=>	6
	)
);

$config['product_actions'] = array(
	'net.profzone.bacterial2.gold_pack6'	=>	array(
		'gold'	=>	3000
	),
	'net.profzone.bacterial2.gold_pack12'	=>	array(
		'gold'		=>	8000,
		'step'		=>	500,
		'uper'		=>	10,
		'killer'	=>	10
	),
	'net.profzone.bacterial2.gold_pack25'	=>	array(
		'gold'	=>	20000
	),
	'net.profzone.bacterial2.gold_pack45'	=>	array(
		'gold'	=>	35000
	),
	'net.profzone.bacterial2.gold_pack68'	=>	array(
		'gold'	=>	60000
	),
	'net.profzone.bacterial2.gold_pack128'	=>	array(
		'gold'	=>	150000
	)
);