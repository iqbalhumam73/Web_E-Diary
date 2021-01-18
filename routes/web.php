<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\NewStoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FollowingController;
use App\Http\Controllers\FollowersController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\StoriesCommentController;
use App\Http\Controllers\AddCommentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/timeline', [TimelineController::class, 'index']);
Route::get('/account/{username}', [AccountController::class, 'index']);
Route::get('/notification', [NotificationController::class, 'index']);
Route::get('/account/newstory', [NewStoryController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::get('/{username}/following', [FollowingController::class, 'index']);
Route::get('/{username}/followers', [FollowersController::class, 'index']);
Route::get('/{username}/stories', [StoriesController::class, 'index']);
Route::get('/{storyid}/storiescomment', [StoriesController::class, 'comment']);
Route::get('/{username}/{storyid}/addcomment', [AddCommentController::class, 'index']);
Route::get('/{username}/playlist', [PlaylistController::class, 'index']);



// /{username}/following
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
