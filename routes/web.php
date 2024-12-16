<?php

use App\Http\Middleware\LocalMiddleware;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();

    return view('user_list',[
        'users' => $users
    ]);
})->name('home');

Route::get('/posts/{userId}',function($userId){
    $user = User::query()->find($userId);
    if($user == null) abort(404);

    return view('posts',[
        'posts' => $user->posts
    ]);

})->name('posts.list');

Route::middleware([
    LocalMiddleware::class
])->group(function () {


    Route::get('/page', function () {
        return view('singleton');
    })->name('page');

    Route::get('/blog', function () {
        return view('singleton');
    })->name('blog');

});
