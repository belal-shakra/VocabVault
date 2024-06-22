<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Alphabetic;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){

        $letters = Alphabetic::all();

        return view('main.home', compact('letters'));
    }
}
