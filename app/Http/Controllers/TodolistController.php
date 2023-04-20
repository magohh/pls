<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        $todolists = Todolist::all();
        return view('home',compact('todolists'));
    }  

    public function dashboard()
    {
        $todolists = Todolist::all();
        return view('dashboard',compact('todolists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'content' => 'required'
        ]);
        Todolist::create($data);
        return back();
    }

    public function edit($id)
    {
        $todolists = Todolist::where('id','=',$id)->first();
        return $todolists;
        return view('edit',compact('todolists'));
    }

    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }

   
}
