<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Book List',
            'books' => Book::all()
        ]);

    }

    public function show(Book $book){
        return view('book', [
            'title' => 'Book Detail',
            'book' => $book
        ]);
    }
}
