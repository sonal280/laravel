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

// Route::get('/', function () {
    
//    return view('index/index');
// });

Route::get('/', 'home@index');

Route::get('/features', 'home@features');

Route::get('/pricing', 'home@pricing');

Route::get('/contact', 'home@contact');

// Route::get('/features', function () {
//     return view('features/features');
// });

// Route::get('/pricing', function () {
//     return view('pricing/pricing');
// });

// Route::get('/contact', function () {
//     return view('contact/contact');
// });




