<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('user_table')->get();
        //$users = User::all();
        return view('user.list')->with('userList', $users);
    }

    public function details($id){
        $user = User::find($id);
        return view('user.details')->with('user', $user);
    }

    public function create(){
        return view('user.create');
    }

    public function insert(Request $req){

        if($req->hasFile('image')){
        
            $file = $req->file('image');
            echo "File Name: ".$file->getClientOriginalName()."<br>";
            echo "File Extension: ".$file->getClientOriginalExtension()."<br>";
            echo "File Mime Type: ".$file->getMimeType()."<br>";
            echo "File Size: ".$file->getSize()."<br>";

            if($file->move('upload', 'abc.'.$file->getClientOriginalExtension())){
                echo "success";
            }else{
                echo "error";
            }
        }
        
        // $user = new User;
        // $user->username = $req->username;
        // $user->password = $req->password;
        // $user->name = $req->name;
        // $user->dept = $req->dept;
        // $user->cgpa = '4';
        // $user->type = 'user';
        // $user->profile_img = '';
        // $user->save();
        // return redirect()->route('user.index');
    }

    public function edit($id){
        //find user by id from user list $user
        $user = User::find($id);
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        
        $user = User::find($id);
        $user->username = $req->username;
        $user->password = $req->password;
        $user->name = $req->name;
        $user->type = $req->type;
        $user->save();
        return redirect()->route('user.index');
    }

    public function delete( $id){
        $user= User::find($id);
        return view('user.delete')->with('user', $user);
    }

    public function destroy($id){
        User::destroy($id);
        return redirect()->route('user.index');
    }


    public function getUserList(){
        return [
            ['id'=>1, 'name'=>'almain', 'email'=>'email@email.com'],
            ['id'=>2, 'name'=>'abc', 'email'=>'abc@email.com'],
            ['id'=>3, 'name'=>'xyz', 'email'=>'xyz@email.com']
        ];
    }
}
