<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.head')
    </head>
    <body>
        <div class="w3-container">
			
			<div class="header">
				@include('layouts.header')
			</div>
			
			<div id="main" class="row">
				@yield('content')
			</div>
			
			<div class="footer">
				@include('layouts.footer')
			</div>
			
        </div>
    </body>
</html>
