<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\BookImage;
use App\Category;

use App\Menu;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
//use Image;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('backend.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $categories = Category::all();
        $authors = Author::all();
        return view('backend.book.create',compact('categories','authors','menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'         => 'required|max:150',
//            'description'     => 'required',
//            'price'             => 'required|numeric',
//            'quantity'             => 'required|numeric',
//            'category_id'             => 'required|numeric',
//            'author_id'             => 'required|numeric',

        ]);
        // get form image
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('book'))
            {
                Storage::disk('public')->makeDirectory('book');
            }
            $book = Image::make($image)->resize(800,600)->stream();
            Storage::disk('public')->put('book/'.$imagename,$book);


        } else {
            $imagename = "default.png";
        }

        $book = new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->quantity = $request->quantity;
        $book->isbn = $request->isbn;
        $book->publisher = $request->publisher;
        $book->publication_date = $request->publication_date;
        $book->edition = $request->edition;
        $book->page = $request->page;
        $book->language = $request->language;
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }

        $book->slug = $slug = make_slug($request->name);
//        $book->slug =  str_slug($request->name);
//        $book->slug = str_slug(preg_replace('/\s+/u', '-', trim($request->name)));
        $book->image = $imagename;
        $book->menu_id =$request->menu_id;
        $book->category_id =$request->category_id;
        $book->author_id = $request->author_id;
        $book->save();


//         if ($request->hasFile('book_image')) {
//           //insert that image
//             foreach ($request->file('book_image') as $index=> $book_image){
////                 $image = $request->file('book_image');
////                 print_r($image);die;
//                 $currentDate = Carbon::now()->toDateString();
//                 $img = $currentDate.'-'.uniqid().'.'.$book_image->getClientOriginalExtension();
//                 $location = public_path('images/books/' .$img);
//                 Image::make($book_image)->save($location);
//
//                 $book_image = new BookImage();
//                 $book_image->book_id = $book->id;
//                 $book_image->image = $img;
//                 $book_image->save();
//             }
//
//         }





        Toastr::success('Book Successfully Saved :)','Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $menus = Menu::all();
        $authors = Author::all();
        $book = Book::find($id);
        return view('backend.book.edit',compact('book','categories','authors','menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'         => 'required|max:150',
//            'description'     => 'required',
//            'price'             => 'required|numeric',
//            'quantity'             => 'required|numeric',
//            'category_id'             => 'required|numeric',
//            'author_id'             => 'required|numeric',

        ]);


        // get form image
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $book = Book::find($id);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('book'))
            {
                Storage::disk('public')->makeDirectory('book');
            }
//            delete old image
            if (Storage::disk('public')->exists('book/'.$book->image))
            {
                Storage::disk('public')->delete('book/'.$book->image);
            }
//            resize image for category and upload
            $bookimage = Image::make($image)->resize(800,600)->stream();
            Storage::disk('public')->put('book/'.$imagename,$bookimage);



        } else {
            $imagename = $book->image;
        }

        $book->name = $request->name;
        $book->description = $request->description;
        $book->price = $request->price;
        $book->quantity = $request->quantity;
        $book->isbn = $request->isbn;
        $book->edition = $request->edition;
        $book->language = $request->language;
//        $book->slug =  str_slug($request->name);
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }

        $book->slug = $slug = make_slug($request->name);
        $book->image = $imagename;
        $book->menu_id =$request->menu_id;
        $book->category_id =$request->category_id;
        $book->author_id = $request->author_id;
        $book->save();

        Toastr::success('Book Successfully Updated :)','Success');
        return redirect()->route('book.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $book = Book::find($id);


        if (Storage::disk('public')->exists('book/'.$book->image))
        {
            Storage::disk('public')->delete('book/'.$book->image);
        }
        $book->delete();
        Toastr::success('book Successfully Deleted :)','Success');
        return redirect()->back();


    }
}
