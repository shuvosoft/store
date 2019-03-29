<?php

namespace App\Http\Controllers\Admin;

use App\ContactInfo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactInfo::latest()->get();
        return view('backend.contact.contactinfoAdd',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contact.contactInfoCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new ContactInfo();
        $contact->l_title = $request->l_title;
        $contact->r_title = $request->r_title;
        $contact->l_description = $request->l_description;
        $contact->r_description = $request->r_description;
        $contact->r_address = $request->r_address;
        $contact->r_phone = $request->r_phone;
        $contact->r_email = $request->r_email;
        $contact->r_web = $request->r_web;
        $contact->save();
        Toastr::success(' Information Successfully Added  :)','Success');
        return redirect()->route('contactinfo.index');
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


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactInfo::find($id);
        $contact->delete();
        Toastr::success(' Information Successfully deleted  :)','Success');
        return redirect()->back();
    }
}
