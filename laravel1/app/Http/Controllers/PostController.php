<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\amit;

class PostController extends Controller
{
    function show($slug)
    {
        // $posts = [
        //     'my-first' => 'My First Love - Amit Chandrakar Ummmmmmmmmaaaaaaaaaaa',
        //     'my-second' => 'My Last Love will be Amit Chandrakar Ummmmmmmaaaaa'
        // ];

        //$post = DB::table('amit')->where('slug', $slug)->first();
        $post  = amit::where('slug', $slug)->firstOrFail();

        // if (!array_key_exists($test, $posts)) {
        //     abort(404, 'Sorry, That post was not found.');
        // }
        // if (!$post) {
        //     abort(404);
        // }
        return view('welcome', [
            'post' => $post
        ]);
    }
}
