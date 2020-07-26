<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
       $article = Article::find($id);
        
       return view('article.show', ['article' => $article]);
    }
}
