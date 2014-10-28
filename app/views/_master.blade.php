<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<!--link rel='stylesheet' href='{{asset('css/foobar.css')}}'>-->
	<title>
	@yield('title', 'Developers Best Friend')
	</title>


	@yield('head')

</head>

<body>
	<div class="welcome">
		<img scr="/img/DevelopersEconomics_01.jpg"/>
		<h1>Welcome to Developer's Best Friend!</h1>
		<h3>A couple of tools that you will find very useful as a developer are: <h3>
			

			<h3>Lorem Ipsum is place holder text used commonly by developers. It is used in place of actually 
			paragraphs so that the meaningless nature of the text allows focus to be directed to the overall 
			layout and design typically of a website or website page.</h3>

			<h3>A lot of web applictations require user interaction. Instead of coming up with a list of users, 
			you can use this application to randomly create them.</h3>


			<h2>Lorem Ipsum Generator</h2>


{{ Form::open(array('url' => '/'))}}

		{{Form::label('paragraphs', 'How many paragraphs do you want?')}}
		{{Form::text('paragraphs')}}
		{{Form::label('max', '(Max Paragraphs: 100)')}}
		<br>
		<br>
		{{Form::checkbox('box', '1')}}
		{{Form::label('box', '(Add color to paragraphs)')}}
		<br>
		<br>
		{{Form::submit('Generate Lorem Ipsum')}}

		{{Form::close() }}




			<h2>Random User Generator</h2>

			{{ Form::open(array('url' => 'lig'))}}

		{{Form::label('users', 'How many users do you want?')}}
		{{Form::text('users')}}
		{{Form::label('max', '(Max users: 50)')}}
		<br>
		<br>
		{{Form::checkbox('box', '1')}}
		{{Form::label('box', '(Include Gender)')}}
		<br>
		<br>
		{{Form::checkbox('box', '1')}}
		{{Form::label('box', '(Include Birthday)')}}
		<br>
		<br>
		{{Form::submit('Create users')}}

		{{Form::close() }}



@yield('lorem-ipsum')


<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

@yield('footer')
</body>
<html>