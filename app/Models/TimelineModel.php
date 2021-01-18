<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TimelineModel extends Model
{
    public function allStories(){
        return $users = DB::table('story')->get();
    }
}
