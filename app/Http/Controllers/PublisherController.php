<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function openpublisher()
    {
        $publisher = Publisher::all();
        $bookcategories = Category::all();
        return view('pages/publisherlist', ['publishers' => $publisher, 'categories' => $bookcategories]);
    }

    public function publisherdetail($id)
    {
        $publisher = Publisher::find($id);
        $bookcategories = Category::all();
        return view('pages/publisherdetail', ['publisher' => $publisher, 'categories' => $bookcategories]);
    }
}
