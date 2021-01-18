<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoriesModel;

class StoriesController extends Controller
{
    public function __construct(){
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
}
