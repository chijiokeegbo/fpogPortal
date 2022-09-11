<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Unit;

class SchoolsController extends Controller
{
    public function store(Request $request)
    {
        //
        $this -> validate($request, [
            'name' => 'required',
        ]);

        $school = new School;

        
        $school->name = $request->input('name');
        $school->save();

        $schools = School::all();
        return redirect('register');
    }

    public function show(){
        return view('posts/school');
    }
    public function create()
    {
        //
        $schools = School::all();
        $units = Unit::all();
        return view('posts.create');
    }
}
