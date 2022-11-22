<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        return view('index', ['books' => $books]);
    }

    public function details($id){
        $book = Book::find($id);

        return view('details', ['book' => $book]);
    }

    public function filterByCategory($id){
        $books = Book::join('book_category', 'books.id', '=', 'book_category.book_id')->where('book_category.category_id', '=', $id)->get();
        $category = Category::find($id);

        return view('category', ['books' => $books, 'category' => $category]);
    }
}
