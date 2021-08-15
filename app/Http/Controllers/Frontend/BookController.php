<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class BookController extends Controller
{
    public function index(){
        $books=Book::paginate(5);
        return view('frontend.book.homepage',compact('books'));
    }

    public function show($book){
        $data['book']=DB::table('books')                        
                        ->join('authors','books.kode_author','=','authors.kode_author')
                        ->where('kode_buku',$book)->first();                      
        return view('frontend.book.show',$data); 
        
    }

    public function borrow(Request $request){
        // $book=DB::table('books')->where('kode_buku',$book)->first();
        
        BorrowHistory::create([
            'kode_user'=>Auth::user()->id,
            'kode_buku'=>$request->kode_buku
        ]);

        return 'ok';
        
    }
}
