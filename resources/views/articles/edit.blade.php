@extends('layouts.default')

@section('title', 'News')

@section('content')
    <ul>	
		<li>{{$article->headline}}</li>
	</ul>
@stop
