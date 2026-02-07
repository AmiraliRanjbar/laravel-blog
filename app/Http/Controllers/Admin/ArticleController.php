<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public  function index()
    {
        return view('frontend.articles');
    }

    public  function create()
    {
        dd('create');
    }

    public function edit($id)
    {
        dd('edit');
    }

    public  function update($id)
    {
        dd('update');
    }

    public function delete($id)
    {
        dd('delete');
    }
}
