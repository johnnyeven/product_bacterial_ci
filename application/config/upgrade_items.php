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
	),
	'upgrade2'		=>	array(
		'name'			=>	'适应性改造-初级',
		'levels'		=>	array(
			array(
				'level'			=>	1,
				'comment'		=>	'生物质消耗-10%',
				'additional'	=>	array(
					'upgradeBiomassDec'	=>	0.1
				),
				'cost'			=>	250,
				'rate'			=>	100
			),
			array(
				'level'			=>	2,
				'comment'		=>	'生物质消耗-20%',
				'additional'	=>	array(
					'upgradeBiomassDec'	=>	0.2
				),
				'cost'			=>	800,
				'rate'			=>	80
			),
			array(
				'level'			=>	3,
				'comment'		=>	'生物质消耗-40%',
				'additional'	=>	array(
					'upgradeBiomassDec'	=>	0.4
				),
				'cost'			=>	2000,
				'rate'			=>	65
			),
			array(
				'level'			=>	4,
				'comment'		=>	'生物质消耗-60%',
				'additional'	=>	array(
					'upgradeBiomassDec'	=>	0.6
				),
				'cost'			=>	4000,
				'rate'			=>	45
			),
			array(
				'level'			=>	5,
				'comment'		=>	'生物质消耗-80%',
				'additional'	=>	array(
					'upgradeBiomassDec'	=>	0.8
				),
				'cost'			=>	8000,
				'rate'			=>	20
			)
		)
	),
	'upgrade3'		=>	array(
		'name'			=>	'适应性改造-高级',
		'levels'		=>	array(
			array(
				'level'			=>	1,
				'comment'		=>	'生物质产量+10%',
				'additional'	=>	array(
					'upgradeBiomassInc'	=>	0.1
				),
				'cost'			=>	400,
				'rate'			=>	100
			),
			array(
				'level'			=>	2,
				'comment'		=>	'生物质产量+20%',
				'additional'	=>	array(
					'upgradeBiomassInc'	=>	0.2
				),
				'cost'			=>	1200,
				'rate'			=>	80
			),
			array(
				'level'			=>	3,
				'comment'		=>	'生物质产量+40%',
				'additional'	=>	array(
					'upgradeBiomassInc'	=>	0.4
				),
				'cost'			=>	3000,
				'rate'			=>	60
			),
			array(
				'level'			=>	4,
				'comment'		=>	'生物质产量+60%',
				'additional'	=>	array(
					'upgradeBiomassInc'	=>	0.6
				),
				'cost'			=>	6000,
				'rate'			=>	40
			),
			array(
				'level'			=>	5,
				'comment'		=>	'生物质产量+100%',
				'additional'	=>	array(
					'upgradeBiomassInc'	=>	1
				),
				'cost'			=>	12000,
				'rate'			=>	20
			)
		)
	),
	'upgrade4'		=>	array(
		'name'			=>	'分裂',
		'levels'		=>	array(
			array(
				'level'			=>	1,
				'comment'		=>	'2%机率在进化时产生新细胞',
				'additional'	=>	array(
					'upgradeSplit'	=>	0.02
				),
				'cost'			=>	400,
				'rate'			=>	100
			),
			array(
				'level'			=>	2,
				'comment'		=>	'4%机率在进化时产生新细胞',
				'additional'	=>	array(
					'upgradeSplit'	=>	0.04
				),
				'cost'			=>	1200,
				'rate'			=>	80
			),
			array(
				'level'			=>	3,
				'comment'		=>	'6%机率在进化时产生新细胞',
				'additional'	=>	array(
					'upgradeSplit'	=>	0.06
				),
				'cost'			=>	3000,
				'rate'			=>	60
			),
			array(
				'level'			=>	4,
				'comment'		=>	'10%机率在进化时产生新细胞',
				'additional'	=>	array(
					'upgradeSplit'	=>	0.1
				),
				'cost'			=>	6000,
				'rate'			=>	40
			),
			array(
				'level'			=>	5,
				'comment'		=>	'15%机率在进化时产生新细胞',
				'additional'	=>	array(
					'upgradeSplit'	=>	0.15
				),
				'cost'			=>	12000,
				'rate'			=>	20
			)
		)
	),
	'upgrade5'		=>	array(
		'name'			=>	'细胞基因序列优化',
		'levels'		=>	array(
			array(
				'level'			=>	1,
				'comment'		=>	'放置细菌消耗的生物酶-10%',
				'additional'	=>	array(
					'upgradeScoreCostDec'	=>	0.1
				),
				'cost'			=>	150,
				'rate'			=>	100
			),
			array(
				'level'			=>	2,
				'comment'		=>	'放置细菌消耗的生物酶-20%',
				'additional'	=>	array(
					'upgradeScoreCostDec'	=>	0.2
				),
				'cost'			=>	600,
				'rate'			=>	90
			),
			array(
				'level'			=>	3,
				'comment'		=>	'放置细菌消耗的生物酶-40%',
				'additional'	=>	array(
					'upgradeScoreCostDec'	=>	0.4
				),
				'cost'			=>	1800,
				'rate'			=>	80
			),
			array(
				'level'			=>	4,
				'comment'		=>	'放置细菌消耗的生物酶-60%',
				'additional'	=>	array(
					'upgradeScoreCostDec'	=>	0.6
				),
				'cost'			=>	3500,
				'rate'			=>	70
			),
			array(
				'level'			=>	5,
				'comment'		=>	'放置细菌消耗的生物酶-80%',
				'additional'	=>	array(
					'upgradeScoreCostDec'	=>	0.8
				),
				'cost'			=>	7000,
				'rate'			=>	50
			)
		)
	),
	'upgrade6'		=>	array(
		'name'			=>	'终极进化',
		'levels'		=>	array(
			array(
				'level'			=>	1,
				'comment'		=>	'%2机率样本自动进化',
				'additional'	=>	array(
					'upgradeAutoRevolution'	=>	0.02
				),
				'cost'			=>	500,
				'rate'			=>	90
			),
			array(
				'level'			=>	2,
				'comment'		=>	'%3机率样本自动进化',
				'additional'	=>	array(
					'upgradeAutoRevolution'	=>	0.03
				),
				'cost'			=>	1500,
				'rate'			=>	75
			),
			array(
				'level'			=>	3,
				'comment'		=>	'%4机率样本自动进化',
				'additional'	=>	array(
					'upgradeAutoRevolution'	=>	0.04
				),
				'cost'			=>	4000,
				'rate'			=>	60
			),
			array(
				'level'			=>	4,
				'comment'		=>	'%5机率样本自动进化',
				'additional'	=>	array(
					'upgradeAutoRevolution'	=>	0.05
				),
				'cost'			=>	8000,
				'rate'			=>	40
			),
			array(
				'level'			=>	5,
				'comment'		=>	'%8机率样本自动进化',
				'additional'	=>	array(
					'upgradeAutoRevolution'	=>	0.06
				),
				'cost'			=>	16000,
				'rate'			=>	20
			)
		)
	)
);