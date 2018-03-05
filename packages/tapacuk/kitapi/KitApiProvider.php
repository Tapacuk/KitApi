<?php

namespace tapacuk\kitapi;

use Illuminate\Support\ServiceProvider;

class KitApiProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php' );
        $this->loadViewsFrom( __DIR__ . '/resources/views', 'tapacuk\kitapi' );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPublishables();
        $this->app->bind('tapacuk-kitapi', function(){
        		return new KitApi();
        });
    }
    
    public function registerPublishables()
    {
    		$basePath = dirname( __DIR__ );
    		
    		$arrPublishable = [
    				
    				'migrations' => [
    						"$basePath/kitapi/publishable/database/migrations" => database_path('migrations'),
    				],
    					
    					'config' => [
    							"$basePath/kitapi/publishable/config/kitapi.php" => config_path('kitapi.php'),
    					]
    		];
    		
    		foreach($arrPublishable as $group => $paths)
    		{
    				$this->publishes($paths, $group);
    		}
    }
}
