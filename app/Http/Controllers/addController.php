<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class addController extends Controller
{
    public function addbook(){
        return view('addbook');
    }

    public function storeBook(Request $request){
        book_list::create([
            'bookTitle' => $request->bookTitle,
            'yearPublished' => $request->yearPublished,
            'author' => $request->author,
            'language' => $request->language,
        ]);

        return view('booklist');
    }
}
