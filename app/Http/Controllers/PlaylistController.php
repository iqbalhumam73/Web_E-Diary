<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index($username)
    {
        return view("stories/playlist");
    }
}
