<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){

        $words = Word::firstWhere('user_id', Auth::user()->id)->where('save', true)->get();

        return view('profile.profile', compact(['words']));
    }


    public function update(ProfileUpdateRequest $request, User $user){

        $profile = $request->validated();
        $profile['password'] = Hash::make($request->password);


        $user->update($profile);
        $user->save();

        return back()->with('profileUpdatedSuccessfully', 'The profile updated successfully.');
    }

}
