<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Home;
use App\Models\Nav;
use App\Models\Nav2;
use App\Models\Nav3;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::all();
        $nav1 = Nav::all();
        $nav2 = Nav2::all();
        $nav3 = Nav3::all();
        $footer = Footer::all();
        return view("welcome", compact("home", "nav1", "nav2", "nav3", "footer"));
    }

    public function boNav()
    {
        $nav = Nav3::all();
        return view("boNav", compact("nav"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $store = new Nav3;
        $store->link = $request->link;
        $store->icone = $request->icone;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Nav3::find($id);
        return view("edit", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Nav3::find($id);
        $update->link = $request->link;
        $update->icone = $request->icone;
        $update->save();
        return redirect("boNav");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Nav3::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}