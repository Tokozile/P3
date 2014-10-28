@extends('_master')

@section('title')
	Lorem Ipsum Generator
	
@stop

@section('head')
    <!--<link rel='stylesheet' href='/css/hello-world.css' type='text/css'>-->
@stop

@section('content')
	<h1>Hello!</h1>

	<h1>Lorem Ipsum Generator</h1>


	@foreach($array as $value)

	<h3>Fake User(s):</h3>
		{{$value}}

	@endforeach

@stop

@section('footer')
    <!--<script src="/js/hello-world.js"></script>-->
@stop