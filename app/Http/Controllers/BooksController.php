<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Menu;
use App\Order;
use App\Slider;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $menus = Menu::all();

        $sliders = Slider::all();
        $categories = Category::all();
        $books = Book::latest()->paginate(8);
        return view('books',compact('books','categories','sliders','menus'));
    }


    public function details($slug){
        $menus = Menu::all();
        $orders = Order::all();
        $sliders = Slider::all();
        $categories = Category::latest()->take(10)->get();
        $book = Book::where('slug',$slug)->first();
        $ramdomPost = Book::take('3')->inRandomOrder()->get();
        return view('book',compact('book','sliders','categories','ramdomPost','orders','menus'));

//        $post = Post::where('slug', $slug)->Approved()->Published()->first();
    }

    public function bookByCategory($slug){
        $menus = Menu::all();
        $sliders = Slider::all();

        $category = Category::where('slug',$slug)->first();
//        $posts = $category->posts()->approved()->published()->get();
        $books = $category->books()->get();
        return view('category',compact('category','books','sliders','menus'));

    }




    public function search(Request $request)
    {
//        $books = Book::all();
        $menus = Menu::all();
        $sliders = Slider::all();
        $search= $request->search;
        $books=Book::orWhere('name','like','%'.$search.'%')
            ->orWhere('description','like','%'.$search.'%')
            ->orWhere('publication_date','like','%'.$search.'%')
//            ->orWhere('publisher','like','%'.$search.'%')
//            ->orWhere('category','like','%'.$search.'%')
            ->orWhere('price','like','%'.$search.'%')
//            ->orderBy('id','desc')
            ->paginate(9);
        return view('search', compact('search','sliders','menus','books'));
    }
}
