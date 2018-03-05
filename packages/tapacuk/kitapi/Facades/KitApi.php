<?php 
		namespace tapacuk\kitapi\Facades;
		
		use Illuminate\Support\Facades\Facade;
		
		class KitApi extends Facade
		{
				protected static function getFacadeAccessor()
				{
						return 'tapacuk-kitapi';
				}
		}
?>