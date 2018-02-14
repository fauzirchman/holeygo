<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function popular()
    {
        return view('popular');
    }

    public function group()
    {
        return view('group');
    }

    public function store()
    {
        return view('store');
    }
}
