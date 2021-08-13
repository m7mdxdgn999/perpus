<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books=Book::paginate(5);
        return view('frontend.book.homepage',compact('books'));
    }
}
