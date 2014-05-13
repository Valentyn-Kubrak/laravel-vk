<?php
/**
 * @author     Evgeny Seleznev <webprogrammist@gmail.com>
 * @copyright  Copyright (c) 2014
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */

namespace Alkali\VK;

use Illuminate\Support\ServiceProvider;

class VKServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('alkali/laravel-vk');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
	    // Register 'oauth'
		    $this->app['vk'] = $this->app->share(function($app)
		    {
                // create oAuth instance
                	$vk = new VK();
        		// return oAuth instance
		        	return $vk;
		    });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}