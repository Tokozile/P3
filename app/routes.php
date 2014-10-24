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

Route::get('/', function()
{
	return View::make('DBF');

});

/*Route::get('/lig', function()
{
	return View::make('lig');

});*/

Route::get('P3/public/lig/{lines}', function($lines)
{
	//return View::make('lig');
	$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($lines);
echo implode('<p>', $paragraphs);
});


Route::get('P3/public/lig', function() {

	//return View::make('lig');
	echo 'Number of Paragraphs?';
    $view  = '<form method="POST" action="/lig">';
    $view .= '<input type="text" name="title">'; 
    $view .= '<input type="submit" name="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/lig', function() {

//Code below will accept input value from form and use it to generate number of paragraphs

    	$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(Input::get('title'));
echo implode('<p>', $paragraphs);

});

Route::get('/P3/public/rug', function()
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


Route::post('P3/public/rug', function() {

		$fakerer = Faker\Factory::create();
		$users = $fakerer->name(Input::get('title'));

		foreach (range(0,$users) as $index){

		// generate data by accessing properties
echo $fakerer->name;
  // 'Lucy Cechtelar';
echo $fakerer->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"
}

//Code below will accept input value from form and use it to generate number of paragraphs

// require the Faker autoloader
//require_once '/path/to/Faker/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
//$faker = Faker\Factory::create();

	# code...

// generate data by accessing properties
//echo $faker->name;
  // 'Lucy Cechtelar';
//echo $faker->address;
  // "426 Jordy Lodge
  // Cartwrightshire, SC 88120-6700"


	/*$a = 'title';

		$faker = Faker\Factory::create();
for ($i='title'; $i < 'title' ; $i++) { 


  echo $faker->name, "\n";
} */
  // Adaline Reichel
  // Dr. Santa Prosacco DVM
  // Noemy Vandervort V
  // Lexi O'Conner
  // Gracie Weber
  // Roscoe Johns
  // Emmett Lebsack
  // Keegan Thiel
  // Wellington Koelpin II
  // Ms. Karley Kiehn V

});



//below is a route that takes in a paremeter from what the user 
//types into the url

/* Route::get('/books', function()
{
	echo App::environment();
	$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);

});

Route::get('/books/{category}', function($category) {
        return 'Here are all the books in the category of '.$category;
}); 

Route::get('/xkcd', function() {

    $view  = '<form method="POST" action="/xkcd">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/xkcd', function() {

    $input =  Input::all();
    print_r($input);

});

Route::get('/permissions', function()
{
	return View::make('permissions');
	return 'hello world 5!';
});  */
