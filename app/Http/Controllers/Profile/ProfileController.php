<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Models\Word;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeleteAccountRequest;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display User Profile
     */
    public function index(){

        $words = Word::firstWhere('user_id', Auth::user()->id)->where('save', true)->get();

        return view('profile.profile', compact(['words']));
    }


    /**
     * Update User Account
     */
    public function update(ProfileUpdateRequest $request, User $user){

        $profile = $request->validated();
        $profile['password'] = Hash::make($request->password);


        $user->update($profile);
        $user->save();

        return back()->with('profileUpdatedSuccessfully', 'The profile updated successfully.');
    }


    /**
     * Delete User Account
     */
    public function destroy(DeleteAccountRequest $request, User $user){

        if($user->id != Auth::user()->id)
            return back();

        $request->validated();

        if($request->email != Auth::user()->email ||
            !Hash::check($request->password, Auth::user()->password))
                return back();


        $user->delete();
        return to_route('main.home');
    }
}
