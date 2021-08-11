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
        return redirect()->route('admin.author.index')->with('success','data berhasil ditambah!');
    }

    public function edit($kode_author){
        $author = Author::where('kode_author', $kode_author)->first();
        return view('admin.author.edit', compact('author'));
    }

    public function update(Request $request, $kode_author){
        Author::where('kode_author', $kode_author)->update([
            'name' => $request->name            
        ]);
        return redirect()->route('admin.author.index')->with('info','data berhasil diupdate!');
    }

    public function Destroy($kode_author)
    {
        Author::where('kode_author', $kode_author)->delete();
        return redirect()->back()->with('danger','data berhasil dihapus!');
    }
    
    
}
