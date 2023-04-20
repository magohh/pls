<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TodolistController;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function index()
    {
        return view('logged');
    }
}
