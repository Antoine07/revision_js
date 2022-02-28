<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index()
    {   //select * from books
        // return Book::all();

        return view("home.index", ['books' => Book::all()]);
    }
}
