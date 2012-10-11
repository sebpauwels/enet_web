<?php

return CMap::mergeArray(
		require(dirname(__FILE__).'/main.php'),
		array(
				'components'=>array(
						'fixture'=>array(
								'class'=>'system.test.CDbFixtureManager',
						),
						'db'=>array(
								'connectionString' => 'mysql:host=localhost;dbname=intakes_manager_test',
								'emulatePrepare' => true,
								'username' => 'root',
								'password' => 'root',
								'charset' => 'utf8',
								'enableProfiling'=>true
						),
						'log'=>array(
								'class'=>'CLogRouter',
								'routes'=>array(
										array(
												'class'=>'CFileLogRoute',
												'levels'=>'error,trace,info,warning',
												//'filter'=>'CLogFilter',
												'categories'=>'system.*'
										)
								)
						),

				),
		)
);
