<?php

namespace App\Http\Controllers;

use App\Book;

class BooksController extends Controller
{
    public function index() 
    {
        $books = Book::all();
        
        return view('books.index', compact('books'));
    }

    public function show(Book $number)
    {
        
        return view('books.show', compact('number'));
    }
}
