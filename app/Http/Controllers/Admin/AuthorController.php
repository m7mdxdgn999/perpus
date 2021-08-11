<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $author=Author::all();
        return view('admin.author.index',compact('author'));
    }

    public function create(){

        return view('admin.author.create');
    }

    public function store(Request $request){

        Author::create($request->only('name'));
        return redirect()->route('admin.author.index');
    }
    
}
