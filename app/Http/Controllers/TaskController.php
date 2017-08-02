<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Book;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showBook(){
        $books = DB::table('books')->get();
        return view('listbooks',['books'=>$books]);
    }

    public function formInsertBook(){
        return view('insertbook');
    }

    public function insertBook(Request $request){
        $book = new Book();
        $book->name = $request->input('bookName');
        $book->price = $request->input('bookPrice');
        $book->save();

        return view('insertbook',['message'=> 'true']);
    }

    public function deleteBook(){
        DB::table('books')-> where('id','=', $_REQUEST['id']) -> delete();
        return redirect('/book');
    }
}
