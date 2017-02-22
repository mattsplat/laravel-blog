<?php

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

// Route::get('/', function () {
//      $posts = DB::table('posts')->get();
//     return $posts;
    
// });
Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::get('/', 'PostsController@index');
// Route::get('/posts', function () {
//     // $posts = DB::table('posts')->latest()->get(); // Query Builder 
//     $posts = App\Post::all();
//     return view('posts.index', compact('posts'));
    
// });
Route::get('/posts/{post}', 'PostsController@show');
// Route::get('/posts/{post}', function ($id) {
//     // $post = DB::table('posts')->find($id);
//     $post = App\Post::find($id);
//     return view('posts.show', compact('post'));
    
// });
