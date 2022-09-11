<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class ParttimeformController extends Controller
{
    //
    public function index(){
        return view('registrations.regdetail');
    }
    
    public function create(){
        return view('/registrations.regform');
    }
    
    public function store(Request $request)
    {

        $this -> validate($request, [
            'lname'=>'required',
            'fname'=>'required',
            'oname'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'town'=>'required',
            'lga'=>'required',
            'state'=>'required',
            'caddress'=>'required',
            'paddress'=>'required',
            'ptown'=>'required',
            'plga'=>'required',
            'pstate'=>'required',
            'phone1'=>'required',
            'email'=>'required',
            'course'=>'required',
            'exnumber'=>'required',
            'exyear'=>'required',
            'exname'=>'required',
            'subject1'=>'required',
            'subject2'=>'required',
            'subject3'=>'required',
            'subject4'=>'required',
            'subject5'=>'required',


        ]);

        $forms = new Form;

        $forms ->lname = $request->input('lname');
        $forms ->fname = $request->input('fname');
        $forms ->oname = $request->input('oname');
        $forms ->dob = $request->input('dob');
        $forms ->gender = $request->input('gender');
        $forms ->town = $request->input('town');
        $forms ->lga = $request->input('lga');
        $forms ->state = $request->input('state');
        $forms ->caddress = $request->input('caddress');
        $forms ->paddress = $request->input('paddress');
        $forms ->ptown = $request->input('ptown');
        $forms ->plga = $request->input('plga');
        $forms ->pstate = $request->input('pstate');
        $forms ->phone1 = $request->input('phone1');
        $forms ->email = $request->input('email');
        $forms ->course = $request->input('course');
        $forms ->exnumber = $request->input('exnumber');
        $forms ->exyear = $request->input('exyear');
        $forms ->exname = $request->input('exname');
        $forms ->sub1 = $request->input('subject1');
        $forms ->sub2 = $request->input('subject2');
        $forms ->sub3 = $request->input('subject3');
        $forms ->sub4 = $request->input('subject4');
        $forms ->sub5 = $request->input('subject5');
        $forms ->save();

        return redirect('/registrations');
        //$form->save();
        
    }
}
