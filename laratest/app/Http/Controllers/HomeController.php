<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        // $name = 'alamin';
        // $id = '1234';
        // return view('home.index', compact('name', 'id'));
        //return view('home.index', ['name'=>'alamin', 'id'=>'123']);

        // return view('home.index')
        //         ->with('id', '12')
        //         ->with('name', 'alamin');

        return view('home.index')
                 ->withId('12')
                 ->withName('xyz');
    }
}
