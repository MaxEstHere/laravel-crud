<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Books;
use App\Authors;
use DB;
use App\Http\Requests;
class BooksController extends Controller
{
    public function show(){
        $books = Books::all();
        return view('books', compact('books'));
    }
    public function book($name){
        
        $books = Books::all();
        return view('author', compact('books','name'));
    } 
    public function insert(Request $request){
     if (Auth::check()){
     $title = $request->input('title');
     $number = $request->input('number');
     $annotation = $request->input('annotation');
     $author = $request->input('author');
     DB::table('books')->updateOrInsert(
        ['title' => $title, 'number' => $number, 'annotation' => $annotation, 'author' => $author]
    );
    return 'Book Add or Update';}
    }
    public function delete($id){
        if (Auth::check()){
        DB::table('books')->where('id',$id)->delete();
        return 'Book delete';}
    }
}
