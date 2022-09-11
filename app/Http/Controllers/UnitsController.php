<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitsController extends Controller
{
    public function index(){


    }
    public function store(Request $request)
    {
        //
        $this -> validate($request, [
            'name' => 'required',
            'cat' => 'required',
            'link' => 'required',
            'about' => 'required',
            'mission' => 'required',
            'vision' => 'required',
        ]);

        $unit = new Unit;

        
        $unit->name = $request->input('name');
        $unit->cat = $request->input('cat');
        $unit->link = $request->input('link');
        $unit->about = $request->input('about');
        $unit->mission = $request->input('mission');
        $unit->vision = $request->input('vision');
        $unit->save();

        $units = Unit::all();
        return redirect('register')->with('units',$units);
    }

    public function show(){
        return view('unit.unit');
    }

    public function create()
    {
        //
        $units = Unit::all();
        return view('posts.create');
    }
}
