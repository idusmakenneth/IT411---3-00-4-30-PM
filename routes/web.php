<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('new_page', function() {
    return view('new_page');
})->name ('new_page');
Route::get('new_page1', function() {
    return view('new_page1');
})->name ('new_page1');
Route::get('new_page2', function() {
    return view('new_page2');
})->name ('new_page2');;



Route::get('/shoutout/{$text}', function($text) {
    return view('shoutout',array('text' => $text));
});


Route::get('new_page', function() { 
  $name = ["amaw", "gg","error"];
   
   return view('new_page', array ('name' => $name));
   })->name ('new_page');

// latest 7/20/2018

Route::get('/foo', function() {
    return view('foo');
})-> name('foo');


Route::get('/bar', function() {
    return view('bar');
})-> name('bar');


// array 

Route::get('/shoutout/{text}', function ($text){
    $colors = array(
        "red"    => "for passion",
        "green"  => "color of nature",
        "blue"   => "it is the color of the sky",
        "white"  => "pureness",
        "black"  => "being bold",
        "silver" => "authentic",
        "yellow" => "warmth"
        
    );
    return view('/shoutout',
 
    array('text' => $text,
          'colors'=> $colors)
     );
})->name('shoutout');

// 






Route::get('/foo',function(){
	return view('foo');
})->name('foo');

Route::get('/bar',function(){
	return view('bar');
})->name('bar');


Route::get('/basic-arithmetic/{operator}/{n1}/{n2}', function($operator,$n1,$n2){
	

	return view('/basic-arithmetic',

					array(

							'n1' => $n1,
							'n2' => $n2,
							'operator' => $operator,

						 )
			  );


	
})->name('basic-arithmetic');









Route::get('/middleware/{age}', function ($age) 
{
  return view ('age', array ('age' => $age));
})-> middleware('age');

