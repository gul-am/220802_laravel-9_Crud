<?php

namespace App\Http\Controllers;

use App\Models\UserColumn;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = UserColumn::all();
        return view ('welcome', compact('users'));
    }

    public function create(){
        return view ('create');
    }

    public function edit(UserColumn $user){
        return view ('edit', compact('user'));
    }

    public function store(Request $request){
            $request -> validate([
                'name' => 'required',
                'contact' => 'required|integer',
                'sector' => 'required|min:8|max:12',
                'gender' => 'required|min:1|max:1'
            ]);

            UserColumn::create($request->all());

            return redirect()->back()->with('success', 'Data saved');
    }

    public function delete(UserColumn $user){

        $user->delete();
        return redirect()->route('home')->with('sucess', 'User deleted !');

    }

    public function update(UserColumn $user, Request $request){

        $request -> validate([
            'name' => 'required',
            'contact' => 'required|integer',
            'sector' => 'required|min:8|max:12',
            'gender' => 'required|min:1|max:1'
        ]);

        $user->name = $request->name;
        $user->contact = $request->contact;
        $user->sector = $request->sector;
        $user->gender = $request->gender;

        $user->save();
        return redirect()->route('home')->with('sucess', 'User updated !');

    }
}
