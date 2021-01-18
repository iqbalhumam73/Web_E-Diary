<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function index($username)
    {
        return view("follow/following");
    }
}
