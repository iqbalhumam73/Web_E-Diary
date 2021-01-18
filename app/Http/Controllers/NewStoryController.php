<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewStoryController extends Controller
{
    public function index()
    {
        return view("newstory");
    }
}
