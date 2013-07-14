<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Estudos',

	// configuração linguagem 
	'language' => 'pt_br',

	// configuraçao do thema
	'theme'=>'mytheme',

	// preloading components
	'preload'=>array(
		'log',
		'bootstrap',
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.models.usuarios.*',
		'application.models.clientes.*',
		'application.models.pedidos.*',
		'application.models.produtos.*',
		'application.components.*',
	),

	'modules'=>array(

		// ativado gii
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'generatorPaths'=>array(
				'bootstrap.gii',
			),
			'password'=>'root',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'clientScript' => array(
		    'coreScriptPosition' => CClientScript::POS_END,
		),

		// adicionado componentes bootstrap
		'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap',
			'responsiveCss' => true,
		),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// 'db'=>array(
		// 	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		// ),

		// CONFIGURACAO DO BANCO DE DADOS MYSQL
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_estudos',
			'username' => 'root',
			'password' => 'root',

			// configuracoes extras
			'emulatePrepare' => true,
			'initSQLs'=>array("set time_zone='-03:00';"),
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),

    // define a pagina inicial
    'defaultController' => 'site/login',
);