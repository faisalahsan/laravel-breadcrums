# Laravel Breadcrums
A laravel breadcrums that will automatically generate the navigation breadcrums that you will specify.

## Installation
Perform the following operations in order to use this middleware
- Run `composer require faisalahsanse/laravel-breadcrums` in your terminal
- **Add Service Provider** 
   Open `config/app.php` and add `Faisalahsan\Breadcrums\BreadcumsServiceProvider::class` to the end of `providers` array:

    ```
    'providers' => array(
        ....
        Faisalahsan\Breadcrums\BreadcumsServiceProvider::class,
    ),
    ```
    
## How to use

- Create a section `breadcrums` in your master layout (or whatever you are using)

   ```
   **blade template**
   @section('breadcrums')
   @show
   ```
- Extend your page with your master layout, in which you want to show breadcrums and define an array of breadcrums.

    ```
    @extends('layouts.master')    
    @section('breadcrums')
    	{{-- */
    		$breadcrumbLinks =[ 'currentPageDisplayName' => 'My Current Page', 
                                'breadcrumbLinks' => [ 'mySecondPageRouteName' => 'Previous Second Page',
                    					  			   'myFirstPageRouteName' => 'Previous First Page',
			                    					   ...
			                    					 ]];
    	/* --}}
    	{{ breadcrums( $breadcrumbLinks )}}
    @show
    ```

- Use routes without parameters
	```
	@section('breadcrums')
    	{{-- */
    		$breadcrumbLinks =[ 'currentPageDisplayName' => 'My Current Page', 
                                'breadcrumbLinks' => [ 'mySecondPageRouteName' => 'Previous Second Page',
                    					  			   'myFirstPageRouteName' => 'Previous First Page',
			                    					   ...
			                    					 ]];
    	/* --}}
    	{{ breadcrums( $breadcrumbLinks )}}
    @show
    ```
- Use routes parameters
	```
	@section('breadcrums')
    	{{-- */
    		$breadcrumbLinks =[ 'currentPageDisplayName' => 'My Current Page', 
                                'breadcrumbLinks' => [ 'mySecondPageRouteName' => 'Previous Second Page',
                    					  			   'myFirstPageRouteName'  => 'Previous First Page',
                    					  			   'myRouteWithParameters' => [ 'routedDisplayName' => 'Route With Parameter', 
                                                                					'routedParameters'  =>['firstParamName' => 'firstParamValue',
						                                                                				   'secondParamName' => 'secondParamValue',
						                                                                				   ....
						                                                                				]]
			                    					   ...
			                    					 ]];
    	/* --}}
    	{{ breadcrums( $breadcrumbLinks )}}
    @show
    ```

- Customize style of breadcrums navigation
	```
	**breadcrumb** class define html tag **ul**
	**breadcrumb-item** class define html tag **li*8 of **ul**
    ```

## How to Contribute
- Feel free to add some new functionality, improve some existing functionality etc and open up a pull request explaining what you did.
- Report any issues in the [issues section](https://github.com/faisalahsan/laravel-breadcrums/issues)
- Also you can reach me directly at faisalahsan.se@gmail.com with any feedback
