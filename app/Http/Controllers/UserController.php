<?php

namespace App\Http\Controllers;

use App\Models\UserColumn;
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
                'name' => 'required',
                'contact' => 'required|integer',
                'sector' => 'required|min:8|max:12',
                'gender' => 'required|min:1|max:1'
            ]);

            UserColumn::create($request->all);

            return redirect()->back()->with('success', 'Data saved');
    }

    public function destroy(){

    }
}
