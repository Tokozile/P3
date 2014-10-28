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


Route::post('/lig', function() {

	$users_1 = Faker\Factory::create();

	$users_num = Input::get('users');

	



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
	else{

		for ($i=0; $i < $users_num ; $i++) { 
			
	echo $users_1->name; 
	echo '<br>';
  // 'Lucy Cechtelar';
	echo $users_1->address;
	echo '<br>'; 
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
/*foreach ($_POST as $value)  {
	
	//print_r($_POST);
	echo $users_1->name; 
	echo '<br>';
  // 'Lucy Cechtelar';
	echo $users_1->address;
	echo '<br>'; 
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"

	print_r($_POST); */


}}
		//$users = new Faker\Generator();

	//$faker = $users->get(Input::get('users'));

		//echo implode('<p>', $faker);

		//$user = $fakerer->name(Input::get('users'));

		//foreach ($_POST as $key => $value) 
	/*		$fakerer = Faker\Factory::create();
		$user = $fakerer->name(Input::get('users')); */
	
});

Route::get('/rug', function()
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
