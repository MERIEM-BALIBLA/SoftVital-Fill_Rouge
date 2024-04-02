<?php

namespace App\Http\Controllers;

use App\Models\medecin\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::get();
        
        return view('SoftVital/index',compact('posts'));
    }
}
