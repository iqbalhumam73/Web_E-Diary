<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoriesModel;

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

    public function comment($story_id){
        $datastory = [
            'stories' => $this->StoriesModel->Comment($story_id),
        ];
        $datacomment = [
            'comments' => $this->StoriesModel->AllComments($story_id),
        ];
        return view('account/storiescomment', $datastory, $datacomment);
    }

}
