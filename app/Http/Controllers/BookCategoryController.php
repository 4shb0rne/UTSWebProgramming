<?php

namespace App\Http\Controllers;

use App\Models\Category;


class BookCategoryController extends Controller
{
    public function filterbook($id)
    {
        $booksfilter = Category::find($id)->bookcategories;
        $bookcategories = Category::all();
        return view('pages/filter', ['booksfilter' => $booksfilter, 'categoryid' => $id, 'categories' => $bookcategories]);
    }
}
