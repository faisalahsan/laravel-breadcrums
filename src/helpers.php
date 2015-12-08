<?php

	use Illuminate\Support\Facades\View;

	function breakCrums( $breadcrumbLinks = null, $defaultStyle = true )
	{	
		echo view::make('breadcrums::breadcrumb', compact( 'breadcrumbLinks', 'defaultStyle' ))->render();
	}

?>