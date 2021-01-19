<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoriesModel;
use Illuminate\Support\Facades\Auth;

class StoriesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        // dideklatasikan di construct supaya bisa dipake di semua method
        $this->StoriesModel = new StoriesModel();
    }
    public function index($username)
    {
        $data = [
            'stories' => $this->StoriesModel->AllStories(),
        ];
        return view('account/stories', $data);
    }

    public function newStory()
    {
        $this->middleware('auth');
        return view("newstory");
    }

    public function comment($story_id){
        $datastory = [
            'stories' => $this->StoriesModel->Comment($story_id),
        ];
        $datacomment = [
            'comments' => $this->StoriesModel->AllComments($story_id),
        ];
        return view('account/storiescomment', $datastory, $datacomment);
    }

    public function insert()
    {
        Request()->validate([
            // 'story_users_id' -> 'required'
            'story_title' => 'required',
            'story_body' => 'required',
        ]);

        $story = [
            'story_users_id' => Auth::user()->id,
            'story_title' => Request()->story_title,
            'story_body' => Request()->story_body,
        ];
        $this->StoriesModel->newStory($story);
        return redirect()->route('timeline');
    }

}
