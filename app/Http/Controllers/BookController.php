<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function showbook()
    {
        $books = Book::all();
        $bookcategories = Category::all();
        return view('pages/home', ['books' => $books, 'categories' => $bookcategories]);
    }

    public function openbookdetail($id)
    {
        $book = Book::find($id);
        $currentcategories = Book::find($id)->bookcategories;
        $bookcategories = Category::all();
        return view('pages/bookdetail', ['book' => $book, 'categories' => $bookcategories, 'currentcategories' => $currentcategories]);
    }

    public function opencontactus()
    {
        $bookcategories = Category::all();
        return view('pages/contactus', ['categories' => $bookcategories]);
    }
}
