<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view ('create');
    }

    public function edit(){
        return view ('edit');
    }

    public function store(Request $request){
            $request -> validate([
                'name'->'required',
                'contact'->'required|integer',
                'sector'->'required|string',
                'gender'->'required|min:1|max:1'
            ]);
    }

    public function destroy(){

    }
}
