<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        return view('Frontend.articles.index');
    }
}
