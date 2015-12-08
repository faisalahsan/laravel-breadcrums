@if ( $defaultStyle )
	<style type="text/css">
		
		body {
		  margin: 0; padding: 10px;
		  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		  font-size: 13px;
		  line-height: 18px;
		  color: #333333;
		  background-color: #ffffff;
		}
		a {
		  color: #0088cc;
		  text-decoration: none;
		}
		a:hover {
		  color: #005580;
		  text-decoration: underline;
		}

		.breadcrumb {
		  padding: 7px 14px;
		  margin: 0 0 18px;
		  background-color: #fbfbfb;
		  background-image: -moz-linear-gradient(top, #ffffff, #f5f5f5);
		  background-image: -ms-linear-gradient(top, #ffffff, #f5f5f5);
		  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#f5f5f5));
		  background-image: -webkit-linear-gradient(top, #ffffff, #f5f5f5);
		  background-image: -o-linear-gradient(top, #ffffff, #f5f5f5);
		  background-image: linear-gradient(to bottom, #ffffff, #f5f5f5);
		  background-repeat: repeat-x;
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f5f5f5', GradientType=0);
		  border: 1px solid #ddd;
		  -webkit-border-radius: 3px;
		  -moz-border-radius: 3px;
		  border-radius: 3px;
		  -webkit-box-shadow: inset 0 1px 0 #ffffff;
		  -moz-box-shadow: inset 0 1px 0 #ffffff;
		  box-shadow: inset 0 1px 0 #ffffff;
		}
		.breadcrumb li {
		  display: inline-block;
		  text-shadow: 0 1px 0 #ffffff;
		}
		.breadcrumb .divider {
		  padding: 0 5px;
		  color: #999999;
		}
	</style>
@endif
@if ( !empty($breadcrumbLinks) )
	<ul class="breadcrumb">
		@if( !empty($breadcrumbLinks['breadcrumbLinks']) )			
			@foreach($breadcrumbLinks['breadcrumbLinks'] as $routeName => $routeDisplayName)				
				@if (is_array($routeDisplayName))
					<li class="breadcrumb-item"><a href="{{ route($routeName, $routeDisplayName['routedParameters']) }}">{{$routeDisplayName['routedDisplayName']}}</a></li>
				@else
					<li class="breadcrumb-item"><a href="{{ route($routeName) }}">{{$routeDisplayName}}</a></li>
				@endif				
			@endforeach
		@endif
		<li><a href="javascript:;"> {{ isset($breadcrumbLinks['currentPageDisplayName']) ? $breadcrumbLinks['currentPageDisplayName'] : '' }}</a></li>
	</ul>
	
@endif