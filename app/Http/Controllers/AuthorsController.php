<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Authors;
use App\Books;
class AuthorsController extends Controller
{
    public function show(){
        $authors = Authors::all();
        $books = Books::all();
        return view('authors', compact('authors', 'books'));
    }
}
