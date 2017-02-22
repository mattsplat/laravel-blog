<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    //Truncate text for preview
    public function shortenText($text, $chars = 100){
        $text = $text.' ';
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text."...";
        return $text;

    }

    // Make date look readable
    public function formatDate($date){
    return date('F d, Y', strtotime($date['date']) );
    }

    public function index(){
        $posts = Post::all();
        foreach($posts as $post){
            $post->body = $this->shortenText($post->body);
            $post->date = date('F d, Y', strtotime($post->created_at));
        }

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
         return view('posts.show', compact('post'));
        
    }

    public function edit(Post $post){
        // $categories = App\Category::all();
        return view('posts.edit', compact('post'));
    }

    
    
}
