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

    	return view('users.profile', compact('user'));
    }
}
