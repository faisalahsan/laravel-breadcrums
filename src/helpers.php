<?php

	use Illuminate\Support\Facades\View;

	function breadCrums( $breadcrumbLinks = null, $defaultStyle = true )
	{	
		echo view::make('breadcrums::breadcrumb', compact( 'breadcrumbLinks', 'defaultStyle' ))->render();
	}

?>