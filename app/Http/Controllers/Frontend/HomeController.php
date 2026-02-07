<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//       dd('home');
//        $string = 'Data Fetching : ';
//        $data = 'Data is True';
//        $datainfo = 'Backup Database';
//        //روش1
////       return view('home', ['title' => $string]);
//        //روش2
//        return view('Frontend.home', compact('string', 'data', 'datainfo'));

        return view('frontend.home');
    }
}
