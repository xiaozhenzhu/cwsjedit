@extends('layouts.default')

@section('title', 'Create')

@section('content')
    <h2>Create an article</h2>
	
	<form method="post" action="/articles">
		{{csrf_field()}}
		
		<input type="text" name="username">
		<input type="submit">
	</form>
@endsection