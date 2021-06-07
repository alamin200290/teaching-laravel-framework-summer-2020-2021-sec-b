<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users  = [
                ['id'=>1, 'name'=>'almain', 'email'=>'email@email.com'],
                ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
                ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
        return view('user.list')->with('userList', $users);
    }

    public function details($id){
        echo $id;
    }
}
