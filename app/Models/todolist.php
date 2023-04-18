<?php

namespace App\Models;

use App\Http\Controllers\PageController;
use App\Http\Controllers\TodolistController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
}
