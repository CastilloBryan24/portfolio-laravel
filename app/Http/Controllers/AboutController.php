<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Info;
use App\Models\Nav;
use App\Models\Nav2;
use App\Models\Nav3;
use App\Models\Progress;
use App\Models\Skill;
use Illuminate\Http\Request;

class AboutController extends Controller
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
        $about = About::all();
        $info = Info::all();
        $skill = Skill::all();
        $progress = Progress::all();
        return view("about", compact("nav1", "nav2", "nav3", "footer", "about", "info", "skill", "progress"));
    }

    public function boInfo()
    {
        $info = Info::all();
        return view("boInfo", compact("info"));
    }

    public function boSkills()
    {
        $skill = Progress::all();
        return view("boSkills", compact("skill"));
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
            "data1" => "required",
            "data2" => "required"
        ]); 

        $store = new Info;
        $store->icone = $request->icone;
        $store->data1 = $request->data1;
        $store->data2 = $request->data2;
        $store->save();
        return redirect()->back();
    }

    public function ajouter(Request $request)
    {

        $validation = $request->validate([
            "skills" => "required",
            "pourcentage" => "required",
            "aria" => "required"
        ]);

        $store = new Progress;
        $store->skills = $request->skills;
        $store->pourcentage = $request->pourcentage;
        $store->aria = $request->aria;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Info::find($id);
        return view("editInfo", compact("edit"));
    }

    public function remplacer($id)
    {
        $edit = Progress::find($id);
        return view("editSkills", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validation = $request->validate([
            "icone" => "required",
            "data1" => "required",
            "data2" => "required"
        ]);

        $update = Info::find($id);
        $update->icone = $request->icone;
        $update->data1 = $request->data1;
        $update->data2 = $request->data2;
        $update->save();
        return redirect("boInfo");
    }

    public function maj(Request $request, $id)
    {

        $validation = $request->validate([
            "skills" => "required",
            "pourcentage" => "required",
            "aria" => "required"
        ]);

        $update = Progress::find($id);
        $update->skills = $request->skills;
        $update->pourcentage = $request->pourcentage;
        $update->aria = $request->aria;
        $update->save();
        return redirect("boSkills");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Info::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function delete($id)
    {
        $destroy = Progress::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}