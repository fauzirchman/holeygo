<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile()
    {
    	$user = Auth::user();

    	return view('users.profile.index', compact('user'));
    }

    public function edit_profile()
    {
    	$user = Auth::user();

    	return view('users.profile.edit', compact('user'));
    }

    public function update_profile(Request $request)
    {
    	$user = Auth::user();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->birthday = $request->birthday;
    	$user->gender = $request->gender;
    	$user->phone = $request->phone;
    	$user->location = $request->location;
    	$user->save();

    	return redirect()->route('users.profile');
    }
}
