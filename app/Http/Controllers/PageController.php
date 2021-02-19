<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
      /**
     * Mostra la pagina Home
     * @return view home
     */
    public function home(){
        return view('home');
    }

      /**
     * Mostra la pagina blog
     * @return view blog
     */
    public function blog(){  
        //$posts = Post::all(); 
        $posts = Post::latest()->get();   
        return view('blog', compact('posts'));
    }
}
