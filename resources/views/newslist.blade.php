<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CWSJ News List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="">
			<ul>
				
				@foreach ($newslist as $news)
					
					<li>{{$news->headline}}</li>
					
				@endforeach
				
			</ul>
        </div>
    </body>
</html>
