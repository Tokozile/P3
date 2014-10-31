<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function() {

	//return View::make('lig');
	/*echo 'Number of Paragraphs?';
    $view  = '<form method="POST" action="/">';
    $view .= '<input type="text" name="title">'; 
    $view .= '<input type="submit" name="submit">';
    $view .= '</form>';
    return $view; */

    	$array = Input::except('_token');
	return View::make('_master')
	->with('array', $array);

});

Route::post('/', function() {

//Code below will accept input value from form and use it to generate number of paragraphs

   		$generator = new Badcow\LoremIpsum\Generator();	
   		$paragraphs = $generator->getParagraphs(Input::get('paragraphs'));


//print_r($_POST);
		if ($_POST['paragraphs'] > 100 )  {
	echo 'You have selected more than 100 paragraphs.';
		}

	elseif ($_POST['paragraphs'] < 1 )  {
		echo 'Please enter a number between 1 and 100.';
	}

	/* elseif (!is_numeric($_POST['paragraphs'])) {
		echo 'Please enter a number gbetween 1 and 100';
	} */
	else{

echo implode('<p>', $paragraphs);
}

//print_r($par}agraphs);

});


Route::post('/lig_1', function() {



	$users_1 = Faker\Factory::create();

	$users_num = Input::get('users');

/*			return View::make('/lig_1')
			->with('user', $users_1);
*/

   // $array = Input::except('_token');
	//return View::make('/lig_1');



//print_r($_POST);
		if ($_POST['users'] > 50 )  {
	echo 'You have selected more than 50 users.';
		}

	elseif ($_POST['users'] < 1 )  {
		echo 'Please enter a number between 1 and 50.';
	}

	/* elseif (!is_numeric($_POST['paragraphs'])) {
		echo 'Please enter a number gbetween 1 and 100';
	} */
	else
	{

		for ($i=0; $i < $users_num ; $i++) 
		{ 
			//echo $users_1->imageUrl(300, 200, 'cats');	
				//echo '<br>';	
			echo $users_1->name; 
				echo '<br>';
		  // 'Lucy Cechtelar';

			echo $users_1->address;
				echo '<br>'; 
		  // "426 Jordy Lodge
		  // Cartwrightshire, SC 88120-6700"

			//IT WORKS!!! :)	
			if (isset($_POST['box2'])) 
			{
				

				echo $users_1->text;
				echo '<br>'; 

			}

			//IT WORKS!!! :)
			if (isset($_POST['box3']))  
			{
			
				echo $users_1->date;
				echo '<br>'; 
			} 

			//IT WORKS!!! :)
			if (isset($_POST['box2']) && isset($_POST['box3']))  {
			
				echo $users_1->text;
				echo '<br>'; 

				echo $users_1->date;
				echo '<br>'; 

			} 

			/*else
			{


			//print_r($_POST['box']);

			}*/

		}
	}
	//return URL::previous();



});

	
	return URL::to('/');
	$view = View::make('lig_1', $users_1);
	URL::previous();

/*Route::get('/rug', function()
{
	//return View::make('rug');
	//return View::make('lig');
	echo 'Number of Paragraphs?';
    $view  = '<form method="POST" action="/rug">';
    $view .= '<input type="text" name="title">'; 
    $view .= '<input type="submit" name="submit">';
    $view .= '</form>';
    return $view;

});
*/