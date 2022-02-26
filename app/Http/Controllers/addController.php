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
        Book::create([
            'Title' => $request->bookTitle,
            'Year_Published' => $request->yearPublished,
            'Author' => $request->author,
            'Pages' => $request->pages,
        ]);

        return view('booklist');
    }
}
