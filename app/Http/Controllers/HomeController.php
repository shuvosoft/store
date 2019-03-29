<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function index()
//    {
//        $books  = Book::latest()->take(8)->get();
//        $pbooks  = Book::all()->take(12);
//        $categories = Category::latest()->get();
//        $sliders = Slider::latest()->get();
//        return view('welcome',compact('books','pbooks','categories','sliders'));
//
//    }


//    public function books(){
//        $books = Book::latest()->get();
//        return view('frontend.books',compact('books'));
//    }
}
