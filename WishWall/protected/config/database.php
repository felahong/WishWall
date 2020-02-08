<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	/**/
	'connectionString' => 'mysql:host=localhost:3312;dbname=wish',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'tablePrefix' => 't_',	   //表前缀
	'enableParamLogging' => true, //开启测试信息
	
);