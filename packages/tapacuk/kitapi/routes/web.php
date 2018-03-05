<?php
		
		$namespace = 'tapacuk\kitapi\Http\Controllers';

		Route::group([
				'namespace' => $namespace,
				'middleware' => 'web',
		], function() {
				
						Route::get('test', 'KitController@index');
						Route::get('/add', 'KitController@add');
						Route::post('/add', 'KitController@store');
						
				
		});

?>