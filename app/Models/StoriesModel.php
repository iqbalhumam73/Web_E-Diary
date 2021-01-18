<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StoriesModel extends Model
{
    public function AllStories(){
        return DB::table('story')->get();
    }
    public function Comment($story_id){
        return DB::table('story')->where('story_id', $story_id)->first();
    }

    public function AllComments($story_id){
        return $users = DB::table('story_comment')->where('story_id', $story_id)->get();
    }
}
