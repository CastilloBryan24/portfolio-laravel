<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Contact2;
use App\Models\Contact3;
use App\Models\Contact4;
use App\Models\Footer;
use App\Models\Nav;
use App\Models\Nav2;
use App\Models\Nav3;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav1 = Nav::all();
        $nav2 = Nav2::all();
        $nav3 = Nav3::all();
        $footer = Footer::all();
        $contact = Contact::all();
        $contact2 = Contact2::all();
        $contact3 = Contact3::all();
        $contact4 = Contact4::all();
        return view("contact", compact("nav1", "nav2", "nav3", "footer", "contact", "contact2", "contact3", "contact4"));
    }

    public function boContact()
    {
        $contact = Contact2::all();
        return view("boContact", compact("contact"));
    }

    public function boClient()
    {
        $client = Client::all();
        return view("boClient", compact("client"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            "icone" => "required",
            "title" => "required",
            "data" => "required"
        ]); 

        $store = new Contact2;
        $store->icone = $request->icone;
        $store->title = $request->title;
        $store->data = $request->data;
        $store->save();
        return redirect()->back();
    }

    public function client(Request $request)
    {

        $validation = $request->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required"
        ]); 

        $store = new Client;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->subject = $request->subject;
        $store->message = $request->message;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Contact2::find($id);
        return view("editContact", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validation = $request->validate([
            "icone" => "required",
            "title" => "required",
            "data" => "required"
        ]); 

        $update = Contact2::find($id);
        $update->icone = $request->icone;
        $update->title = $request->title;
        $update->data = $request->data;
        $update->save();
        return redirect("boContact");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Contact2::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
