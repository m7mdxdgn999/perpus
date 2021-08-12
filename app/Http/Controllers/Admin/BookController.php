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
}
