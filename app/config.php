<?php

$config = [
	// 'default_c'		=> 'site',		//default controller
	// 'rute'			=> 'r',			//parameter default untuk get adalah r	
	'appname' 		=> 'Aplikasi beta',	//nama aplikasi
	'dbdriver'		=> 'mysql',		//driver database. Next: sqlite, postgresql
	// 'dbhost'			=> 'localhost',		//nilai defaultnya 127.0.0.1
	// 'dbuser'		=> 'root',			//nilai defaultnya root
	'dbpass'	=> 'toor',			//nilai defaultnya blank
	'dbname'		=> 'crudbuku',
	'urlalias' => [
		'about' => 'site/about',
		'contact' => 'site/contact',
	],
];

DEFINE('DIR_M', (isset($config['dir_m'])?isset($config['dir_m']):dirname(__DIR__) .'/app/M/'));
DEFINE('DIR_V', (isset($config['dir_v'])?isset($config['dir_v']):dirname(__DIR__) .'/app/V/'));
DEFINE('DIR_C', (isset($config['dir_c'])?isset($config['dir_c']):dirname(__DIR__) .'/app/C/'));
