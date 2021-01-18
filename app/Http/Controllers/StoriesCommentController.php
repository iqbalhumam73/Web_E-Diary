<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoriesCommentModel;

class StoriesCommentController extends Controller
{
    public function __construct(){
        // dideklatasikan di construct supaya bisa dipake di semua method
        $this->StoriesCommentModel = new StoriesCommentModel();
    }
    public function index($username, $storyid)
    {
        $data = [
            'comments' => $this->StoriesCommentModel->AllComments(),
        ];
        return view('account/storiescomment', $data);
        // return view('account/storiescomment');
    }
}
