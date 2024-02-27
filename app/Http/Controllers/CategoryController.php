<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $categories = Category::all();
        $category = Book::join('book_categories', 'books.id', '=', 'book_categories.book_id')->
        join('categories', 'categories.id', '=', 'book_categories.category_id')->where('category_id', '=', $id)->get(['books.*', 'categories.name']);
        return view('categories', compact('category', 'categories'), [
            'title' => 'Category'
        ]);
    }
}
