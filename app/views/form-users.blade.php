{{ Form::open(array('url' => '/'))}}

		{{Form::label('paragraphs', 'How many paragraphs do you want?')}}
		{{Form::text('paragraphs')}}
		{{Form::label('max', 'Max Paragraphs is 100')}}
		<br>

		{{Form::label('box', 'Add color to paragraphs')}}
		{{Form::checkbox('box', '1')}}
		<br>

		{{Form::submit('Generate Lorem Ipsum')}}

		{{Form::close() }}

