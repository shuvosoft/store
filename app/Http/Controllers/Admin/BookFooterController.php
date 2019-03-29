<?php

namespace App\Http\Controllers\Admin;

use App\BookFooter;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BookFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookFooters = BookFooter::latest()->get();
        return view('backend.book.book_footer',compact('bookFooters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.book.book_footer_create');
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
            'title' => 'required'

        ]);

        // get form image
        $image = $request->file('image');

        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('footerLogo'))
            {
                Storage::disk('public')->makeDirectory('footerLogo');
            }
            $footer = Image::make($image)->resize(150,100)->stream();
            Storage::disk('public')->put('footerLogo/'.$imagename,$footer);


        } else {
            $imagename = "default.png";
        }

        $footerLogo = new BookFooter();
        $footerLogo->image = $imagename;
        $footerLogo->title = $request->title;
        $footerLogo->save();
        Toastr::success(' Successfully Saved :)','Success');
        return redirect()->route('New_book_footer.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booFooter = BookFooter::find($id);
        if (Storage::disk('public')->exists('footerLogo/'.$booFooter->image))
        {
            Storage::disk('public')->delete('footerLogo/'.$booFooter->image);
        }


        $booFooter->delete();
        Toastr::success('Successfully Deleted :)','Success');
        return redirect()->back();


    }
}
