<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::latest()->get();
       return view('backend.author.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.author.create');
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
          'name' => 'required',

       ]);

        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('author'))
            {
                Storage::disk('public')->makeDirectory('author');
            }

            $authortImage = Image::make($image)->resize(80,70)->stream();
            Storage::disk('public')->put('author/'.$imageName,$authortImage);

        } else {
            $imageName = "default.png";
        }
       $author = new Author();
       $author->name = $request->name;
       $author->about = $request->about;
        $author->slug = $slug;
       $author->image = $imageName;

       $author->save();
        Toastr::success('Author Successfully Saved :)','Success');
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
       $author = Author::find($id);
       return view('backend.author.edit',compact('author'));
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
           'name' => 'required'
        ]);


        // get form image
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $author = Author::find($id);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('author'))
            {
                Storage::disk('public')->makeDirectory('author');
            }
//            delete old image
            if (Storage::disk('public')->exists('author/'.$author->image))
            {
                Storage::disk('public')->delete('author/'.$author->image);
            }
//            resize image for category and upload
            $authorimage = Image::make($image)->resize(80,79)->stream();
            Storage::disk('public')->put('author/'.$imagename,$authorimage);



        } else {
            $imagename = $author->image;
        }

        $author->name = $request->name;
        $author->about = $request->about;
        $author->slug = $slug;
        $author->image = $imagename;
        $author->save();
        Toastr::success('Author Successfully Updated :)','Success');
        return redirect()->route('author.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $author = Author::find($id);
        if (Storage::disk('public')->exists('author/'.$author->image))
        {
            Storage::disk('public')->delete('author/'.$author->image);
        }
       $author->delete();
        Toastr::success('author Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
