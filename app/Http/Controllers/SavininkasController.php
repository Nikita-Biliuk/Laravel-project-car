<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SavininkasController extends Controller
{
    public function create(){
        return view("user.create");
    }

    public function store(Request $request){
        $user=new User();
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->phone=$request->phone;
        $user->save();
        return redirect()->route('user.index');
    }

    public function index(){
        return view('user.index', [
            'users'=>User::all()
        ]);
    }

    public function edit($id){
        $user=User::find($id);
        return view('user.edit', [
            'user'=>$user
        ]);
    }

    public function save($id, Request $request){
        $user=User::find($id);
        $user->name=$request->name;
        $user->surname=$request->surname;
        $user->phone=$request->phone;
        $user->save();
        return redirect()->route('user.index');
    }

    public function delete($id){
        return redirect()->route('user.index');
    }
}
