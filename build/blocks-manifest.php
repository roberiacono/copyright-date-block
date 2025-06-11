<?php
// This file is generated. Do not modify it manually.
return array(
	'copyright-date-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/copyright-date-block',
		'version' => '0.1.0',
		'title' => 'Copyright Date Block',
		'category' => 'widgets',
		'icon' => 'calendar',
		'description' => 'Display copyright start year and current year.',
		'example' => array(
			
		),
		'supports' => array(
			'color' => array(
				'background' => true,
				'text' => true
			),
			'html' => false,
			'typography' => array(
				'fontSize' => true
			)
		),
		'attributes' => array(
			'showStartingYear' => array(
				'type' => 'boolean'
			),
			'startingYear' => array(
				'type' => 'string'
			)
		),
		'textdomain' => 'copyright-date-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	)
);
