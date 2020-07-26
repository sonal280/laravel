<?php


// Resourceful
// get, post, put, patch, delete
// fetch, insert, update, delete, 

// Route::get('/', 'ControllerName@methodName');
Route::get('/hello/{post}', function($post){

    $posts = [
        'one' => 'one',
        'two' => 'two'
    ];
    // Route::get('/', function(){
    // $name = request('name');
    // return $name;
    // $a=10;
    // dd($a); /* echo $a; die(); */
    // dump('hello');
    // dump($post);
    // // dump & die



    // $data['name'] = 'sonal';
    // return view('welcome', [
    //     'name' => $name
    // ]);

//     return view('welcome', [
//         'post' => $posts[$post]
//     ]);

});
Route::get('/', function(){
return view('welcome');
});

// Route::get('/test', 'TestController@index');

// Route::post('/save-student-record', 'TestController@store'); save data



// CRUD

// 1. fetch  = index() = get()
// 2. insert form = create() = get()
// 3. data insert = store() = post()
// 4. single record fetch = show() = get()
// 5. edit form show = edit() = get()
// 6. save updated record  = update() = put() = patch()
// 7. delete data = destroy() = delete()

// CRUD
Route::get('/add', 'EmployeesController@create');
Route::post('/save', 'EmployeesController@store');
Route::get('/edit/{id}', 'EmployeesController@edit');
Route::post('/update/{id}', 'EmployeesController@update');

Route::post('/delete', 'EmployeesController@destroy');
Route::get('/show/{id}', 'EmployeesController@show');

Auth::routes();
/* login, register, forgot password */

 Route::get('/home', 'EmployeesController@index')->name('home');
//Route::redirect('/home', '/add');