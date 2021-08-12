<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(){        
        $data['books']= DB::table('books')
                    ->join('authors','books.kode_author','=','authors.kode_author')
                    ->get();
        return view('admin.book.index',$data);
    }

    public function create(){
        
        $authors=Author::all();
        return view('admin.book.create',compact('authors'));
    }

    public function store(Request $request){

        $this->validate($request,[

            'title'=>'required',
            ''=>'required',
            'cover'=>'file|image',
            'kode_author'=>'required',
            'qty'=>'required|numeric',

        ]);

        if ($request->hasFile('cover')){
            $cover=$request->file('cover')->store('assets/covers');
        }

        Book::create([

            'title'=>$request->title,
            'description'=>$request->description,
            'kode_author'=>$request->kode_author,
            'cover'=>$cover,
            'qty'=>$request->qty,          

        ]);

        return redirect()->route('admin.book.index')->with('success','data berhasil ditambah!');
    }
}
