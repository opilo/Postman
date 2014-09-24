<?php namespace Opilo\Postman;

use Illuminate\Support\ServiceProvider;

class PostmanServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('opilo.postman');
	}


    public function boot(){
        $this->bootRepositories();
    }

    public function bootRepositories(){
        $this->app->bind('Opilo\Postman\Repositories\UrlTunnelRepository', 'Opilo\Postman\Repositories\Eloquent\UrlTunnelRepositoryEloquent');
        $this->app->bind('Opilo\Postman\Repositories\UrlTunnelSmsRepository', 'Opilo\Postman\Repositories\Eloquent\UrlTunnelSmsRepositoryEloquent');

    }
}
