<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Unit;
use App\Post;

class PagesController extends Controller
{
    //
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(8);
        $units = Unit::where('cat','unit')->get();
        $schools = Unit::where('cat','school')->get();
        return view('pages.index', compact('posts','units','schools'));
    }

    public function about(){
        $title='Welcome to Federal Polytechnic of Oil & Gas, About Page';
        return view('pages.about', compact('title'));
    }

    public function program(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, Programms Page';
        return view('pages.program', compact('title'));
    }

    public function services(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, Services Page';
        return view('pages.services', compact('title'));
    }

    public function contact(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, Contact Us Page';
        return view('pages.contact', compact('title'));
    }

    public function note(){
        $post = Post::all();
        return view('pages.note')->with('post', $post);
    }
    public function management(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, Management Hierachy';
        return view('pages.magt', compact('$title'));
    }

    public function history(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, History of the Polytechnic';
        return view('pages.history');
    }
    public function message(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, Rectors Message';
        return view('pages.rector', compact('$title'));
    }
    public function mission(){
        $title = 'Welcome to Federal Polytechnic of Oil & Gas, Mission and Vission';
        return view('pages.mission', compact('$title'));
    }
}
