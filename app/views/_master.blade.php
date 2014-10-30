<!doctype html>

<html>

<head>
	<meta charset="utf-8">
	<!--link rel='stylesheet' href='{{asset('css/foobar.css')}}'>-->
	<title>
	@yield('title', 'Developers Best Friend')
	</title>


	@yield('head')

	    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    	<link rel='stylesheet' href='/style.css' type='text/css'>

</head>

<body>
	<div class="welcome">
		<!--<img scr="/img/DevelopersEconomics_01.jpg"/>-->

		<!-- <img src=' {{ URL::asset('img/DevelopersEconomics_01.jpg') }} ' alt='pic of DBF'> -->
		<h1>Welcome to Developer's Best Friend!</h1> </div>

		<div class="lig">
		<h3>Lorem Ipsum</h3>
		<p>A couple of tools that you will find very useful as a developer are: </p>
			

			<p>Lorem Ipsum is place holder text used commonly by developers. </p>
			<p>It is used in place of actually paragraphs so that the meaningless </p>
			<p>nature of the text allows focus to be directed to the overall </p>
			<p>layout and design typically of a website or website page.</p>


						<h3>Lorem Ipsum Generator</h3>


{{ Form::open(array('url' => '/'))}}

		{{Form::label('paragraphs', 'How many paragraphs do you want?', ['class'=>'ptext'])}}

		<!--code below gave me a a nice multi line text area-->
		<!--{{Form::textarea('paragraphs', '5', ['length'=>'2'])}}-->

		<!--This is me experimenting with maxlength in laravel and failing
		{{Form::text('paragraphs', '5', ['required|min:1|max:2|numeric'])}}-->

		{{Form::text('paragraphs','5')}}
		{{Form::label('max', '(Max Paragraphs: 100)',['class'=>'ptext'])}}
		<br>
		<br>
		{{Form::submit('Generate Lorem Ipsum', ['class'=>'button'])}}

		{{Form::close() }}

		<br>
		<br>
				</div>	

				<div class="rug">
		<h3>Users</h3>
			<p>A lot of web applictations require user interaction. </p>
			<p>Instead of coming up with a list of users, </p>
			<p>you can use this application to randomly create them.</p>







			<h3>Random User Generator</h3>

			{{ Form::open(array('url' => '/lig_1'))}}

		{{Form::label('users', 'How many users do you want?',['class'=>'ptext'])}}
		{{Form::text('users', '5')}}
		{{Form::label('max', '(Max users: 50)',['class'=>'ptext'])}}
		<br>
		<br>
		{{Form::checkbox('box2', '2')}}
		{{Form::label('box', '(Include Profile)',['class'=>'ptext'])}}
		<br>
		<br>
		{{Form::checkbox('box3', '3')}}
		{{Form::label('box', '(Include Birthday)',['class'=>'ptext'])}}
		<br>
		<br>
		{{Form::submit('Create users', ['class'=>'button'])}}

		{{Form::close() }}
</div>


@yield('lorem-ipsum')


<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

@yield('footer')
</body>
<html>