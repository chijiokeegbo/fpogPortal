<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class OtherControllers extends Controller
{
    public function sce(){
        $posts = Post::where('link','sce')->get();
        return view('sidepages.sce')->with('posts',$posts);
    }
    //
    public function remedial(){
        $posts = Post::where('link','remedial')->get();
        return view('sidepages.remedial')->with('posts',$posts);
    }

    public function ict(){

        return view('sidepages.sce');
    }


    public function consultancy(){
        $posts = Post::where('link','consultancy')->get();
        return view('sidepages.consultancy')->with('posts',$posts);
    }

    public function procurement(){
        $posts = Post::where('link','procurement')->get();
        return view('sidepages.procurement')->with('posts',$posts);
    }

    public function update(){
        return view('sidepages.procurement');
    }


    public function destroy(){
        return view('sidepages.consultancy');
    }
}
