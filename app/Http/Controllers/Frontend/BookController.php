<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BookController extends Controller
{
    public function index(){
        $books=Book::paginate(5);
        return view('frontend.book.homepage',compact('books'));
    }

    public function show($book){
        $data['book']=Book::findOrFail($book);
        $data['author']= DB::table('books')
                    ->join('authors','books.kode_author','=','authors.kode_author')
                    ->get();
        return view('frontend.book.show',$data); 
        
    }
}
