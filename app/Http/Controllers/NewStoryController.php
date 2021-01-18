<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewStoryController extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        return view("newstory");
    }
}
