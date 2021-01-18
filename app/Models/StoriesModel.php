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
}
