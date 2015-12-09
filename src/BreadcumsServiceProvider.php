<?php

	namespace Faisalahsan\Breadcrums;

	use Illuminate\Support\ServiceProvider;

	/**
	* 
	*/
	class BreadcumsServiceProvider extends ServiceProvider
	{
		
		/**
	     * Indicates if loading of the provider is deferred.
	     *
	     * @var bool
	     */
		protected $defer = false;
	    protected $package = 'faisalahanse/laravel-breadcrums';

		public function register(){
			$this->app->bind( 'breadcrums', function( $app ){
				return new Breadcrums;
			});
		}

		public function boot( )
		{
			require __DIR__ . '/helpers.php';

			$this->loadViewsFrom( __DIR__ . '/../views/', 'breadcrums');
		}
	}
