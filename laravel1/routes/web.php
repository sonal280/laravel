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

use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    $article = App\Article::latest()->get();
    return view('welcome', [
        'article' =>$article
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {    
    return view('about');
});

Route::get('/article/{id}', 'ArticleController@show');

// Route::get('/welcome', function () {
//     // return ['foo' => 'foo'];
//     $name = request('name');
//     return view('welcome', [
//         'name' => $name 
//     ]);
//     // return view('welcome');
// });

// Route::get('/posts/{test}', function ($test){
//     $posts = [
//         'my-first-page' => 'My First Love - Amit Chandrakar Ummmaaaaaaaaaaaaaaaaaa',
//         'my-second-page' => 'My Last Love will be Amit Chandrakar Ummmmmaaaaaaaaaaa'
//     ];

//     if(!array_key_exists($test, $posts)){
//         abort(404, 'Sorry, That post was not found.');
//     }

//     return view('welcome', [
//         'post' => $posts[$test]
//     ]);
// //    return $post;
// });

Route::get('/post/{post}', 'PostController@show');


