<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCommentController extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        return view("account/addcomment");
    }
}

