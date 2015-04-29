<?php return array(
	'life_cache' => 10,
	'template' => array(
		1 => 'index',
		2 => 'page',
		3 => 'list',
		4 => 'product'
	),
        'template_composer' => array(
            'menu' => array(
                'eva::layouts.master'
            ),
            'list' => array(
                'eva::tpl.list'
            )
        )
);