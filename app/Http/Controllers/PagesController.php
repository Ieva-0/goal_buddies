<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $goals = \App\Goal::all();

        return view('welcome', compact('goals'), [
            'foo' => 'bar'
        ]);
    }
    public function contact(){
        return view('contact');
    }
    public function feedback(){
        return view('feedback');
    }


}
