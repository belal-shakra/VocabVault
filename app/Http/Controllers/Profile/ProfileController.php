<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){

        $words = Word::firstWhere('user_id', Auth::user()->id)->where('save', true)->get();

        return view('profile.profile', compact(['words']));
    }


    public function update(){



        return back()->with('profileUpdatedSuccessfully', 'The profile updated successfully.');
    }

}
