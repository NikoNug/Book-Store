<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        return view('publishers', [
            'title' => "Publisher",
            'publishers' => Publisher::all()
        ]);
    }

    public function show(Publisher $publisher){
        return view('publisher', [
            'title' => "Single Publisher",
            'books' => $publisher->books,
            'publisher' => $publisher
        ]);
    }
}
