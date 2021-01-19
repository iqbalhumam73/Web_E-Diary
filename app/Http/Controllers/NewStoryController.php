<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoriesModel;

class NewStoryController extends Controller
{
    public function index()
    {
        $this->middleware('auth');
        return view("newstory");
    }

    public function insert()
    {
        Request()->validate([
            'story_title' => 'required',
            'story_body' => 'required',
        ]);

        $story = [
            'story_title' => Request()->story_title,
            'story_body' => Request()->story_body,
        ];
        $this->StoriesModel->newStory($story);
        return redirect()->route('timeline');
    }
}
