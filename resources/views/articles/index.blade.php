@extends('layouts.default')

@section('title', 'News List')

@section('content')
    <ul>
		@foreach ($articles as $article)
			
			<li>{{$article->headline}}</li>
			
		@endforeach
		
	</ul>
@stop
