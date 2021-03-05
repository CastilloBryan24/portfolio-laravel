<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Nav;
use App\Models\Nav2;
use App\Models\Nav3;
use App\Models\PFimg;
use App\Models\PFnav;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        $portfolio = Portfolio::all();
        $navigation = PFnav::all();
        $image = PFimg::all();
        return view("portfolio", compact("nav1", "nav2", "nav3", "footer", "portfolio", "navigation", "image"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function boPortfolio()
    {
        $portfolio = PFimg::all();
        return view("boPortfolio", compact("portfolio"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "filter" => "required",
            "picture" => "required",
            "name1" => "required",
            "name2" => "required",
            "picture2" => "required"
        ]); 

        $store = new PFimg;
        $store->filter = $request->filter;
        $store->name1 = $request->name1;
        $store->name2 = $request->name2;
        Storage::put('public/img/', $request->file('picture'));
        Storage::put('public/img/', $request->file('picture2'));
        $store->picture = $request->file('picture')->hashName();
        $store->picture2 = $request->file('picture2')->hashName();
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }

    public function download($id)
    {
        $down = PFimg::find($id);
        return Storage::download('public/img/'.$down->picture);
    }
}


// $store = new Member;
// $store->name = $request->name;
// $store->age = $request->age;
// $store->genre = $request->genre;
// Storage::put('public/img/', $request->file('src'));
// $store->src = $request->file('src')->hashName();
// $store->save();
// return redirect()->back();
// }