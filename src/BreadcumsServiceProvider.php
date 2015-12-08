<?php
	namespace Faisalahsanse\Breadcrums;

	use Illuminate\Support\ServiceProvider;

	/**
	* 
	*/
	class BreadcumsServiceProvider extends ServiceProvider
	{
		
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