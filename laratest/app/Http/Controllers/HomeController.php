<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){


        
        // $name = 'alamin';
        // $id = '1234';
        // return view('home.index', compact('name', 'id'));
        //return view('home.index', ['name'=>'alamin', 'id'=>'123']);

        // return view('home.index')
        //         ->with('id', '12')
        //         ->with('name', 'alamin');


        if($req->session()->has('uname')){
            return view('home.index')
                    ->withId('12')
                    ->withName('xyz');
        }else{
            $req->session()->flash('msg', 'Invalid request');
            return redirect('/login');
        }

    }
}
