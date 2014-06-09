<?php
return array(
	'controllers' => array(
		'invokables' => array(
		)
	),
	'service_manager' => array(
			'invokables' => array(
			)
	),
	'blocksDefinition' => array(
	),
	'templates' => array(
		'themes' => array(
			't01' => array(
				'label' => 'Stylish Porfolio',
				'basePath' => realpath(__DIR__ . '/../theme'),
			),
		),
		'namespaces' => array(
	    	't01' => realpath(__DIR__ . '/../templates')
		),
    ),
);