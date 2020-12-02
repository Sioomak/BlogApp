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

// Route::get('/posts/{post}','App\Http\Controllers\PostController@show');


Route::get('/', function(){
  return view('welcome');
});

Route::get('/contact', function(){
  return view('contact');
});

//  Route::get('/posts/{post}', function($post){
//     $posts = [
//         'my-first-post' => 'Hi this is the first one!', 
//         'my-second-post' => 'Hi, this is secondada!'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Woopsy haji..');

//     }
//     return view('post', [
//         'post' => $posts[$post] ?? 'hichi nist!'
//     ]);

    
     
//  });
