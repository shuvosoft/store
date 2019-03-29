<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
   public function index(){
       $book = Book::all();
       $author = Author::all();
       $category = Category::all();
       return view('backend.dashboard',compact('category','author','book'));
   }
}
