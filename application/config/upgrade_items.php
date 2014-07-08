<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['upgrade_items'] = array(
	'upgrade1'		=>	array(
		'name'			=>	'生物酶基因改造',
		'levels'		=>	array(
			array(
				'level'			=>	1,
				'comment'		=>	'生物酶产量+10%',
				'additional'	=>	array(
					'upgradeScoreInc'	=>	0.1
				),
				'cost'			=>	300,
				'rate'			=>	100
			),
			array(
				'level'			=>	2,
				'comment'		=>	'生物酶产量+20%',
				'additional'	=>	array(
					'upgradeScoreInc'	=>	0.2
				),
				'cost'			=>	1000,
				'rate'			=>	90
			),
			array(
				'level'			=>	3,
				'comment'		=>	'生物酶产量+40%',
				'additional'	=>	array(
					'upgradeScoreInc'	=>	0.4
				),
				'cost'			=>	3000,
				'rate'			=>	80
			),
			array(
				'level'			=>	4,
				'comment'		=>	'生物酶产量+70%',
				'additional'	=>	array(
					'upgradeScoreInc'	=>	0.7
				),
				'cost'			=>	6000,
				'rate'			=>	70
			),
			array(
				'level'			=>	5,
				'comment'		=>	'生物酶产量+120%',
				'additional'	=>	array(
					'upgradeScoreInc'	=>	1.2
				),
				'cost'			=>	10000,
				'rate'			=>	60
			),
		)
	)
);