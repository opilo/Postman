<?php namespace Opilo\Postman;

use Illuminate\Support\ServiceProvider;

class PostmanServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind(
            'Opilo\Postman\Repositories\WebhookRepository',
            'Opilo\Postman\Repositories\Eloquent\WebhookRepositoryEloquent'
        );
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
        $this->package('opilo/postman');
    }

    public function bootRepositories(){
        $this->app->bind('Opilo\Postman\Repositories\WebhookRepository', 'Opilo\Postman\Repositories\Eloquent\WebhookRepositoryEloquent');
        $this->app->bind('Opilo\Postman\Repositories\WebhookRequestRepository', 'Opilo\Postman\Repositories\Eloquent\WebhookRequestRepositoryEloquent');

    }
}
