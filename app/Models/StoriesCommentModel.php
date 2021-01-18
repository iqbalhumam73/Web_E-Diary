<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StoriesCommentModel extends Model
{
    public function allComments(){
        return $users = DB::table('story_comment')->get();
    }
}
