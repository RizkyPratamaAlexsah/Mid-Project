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
        Books::create([
            'Title' => $request->bookTitle,
            'Year Published' => $request->yearPublished,
            'Author' => $request->author,
            'Language' => $request->language,
        ]);

        return view('booklist');
    }
}
