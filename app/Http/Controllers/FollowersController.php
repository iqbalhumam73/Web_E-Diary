<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function index($username)
    {
        return view("follow/followers");
    }
}
