<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Letter;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display Home Page
     */
    public function home(){

        return view('main.home');
    }
}
