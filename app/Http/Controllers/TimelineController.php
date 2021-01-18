<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimelineModel;

class TimelineController extends Controller
{
    public function __construct(){
        // dideklatasikan di construct supaya bisa dipake di semua method
        $this->TimelineModel = new TimelineModel();
    }
    public function index()
    {
        $datatimeline = [
            'stories' => $this->TimelineModel->AllStories(),
        ];
        return view('timeline', $datatimeline);
    }
}
