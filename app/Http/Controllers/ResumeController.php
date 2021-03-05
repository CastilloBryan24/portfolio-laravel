<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Experience2;
use App\Models\Experience3;
use App\Models\Footer;
use App\Models\Nav;
use App\Models\Nav2;
use App\Models\Nav3;
use App\Models\Resume;
use App\Models\Summary;
use App\Models\Summary2;
use Illuminate\Http\Request;

class ResumeController extends Controller
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
        $resume = Resume::all();
        $summary = Summary::all();
        $summary2 = Summary2::all();
        $experience = Experience::all();
        $experience2 = Experience2::all();
        $experience3 = Experience3::all();
        $education = Education::all();
        return view("resume", compact("nav1", "nav2", "nav3", "footer", "resume", "summary", "summary2", "experience", "experience2", "experience3", "education"));
    }

    public function boEducation()
    {
        $education = Education::all();
        return view("boEducation", compact("education"));
    }

    public function boExperience()
    {
        $experience = Experience::all();
        $data = Experience2::all();
        return view("boExperience", compact("experience", "data"));
    }

    public function boSummary()
    {
        $summary = Summary::all();
        $summary2 = Summary2::all();
        return view("boSummary", compact("summary", "summary2"));
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
        $store = new Experience;
        $store->name = $request->name;
        $store->date = $request->date;
        $store->place = $request->place;
        $store->save();
        return redirect()->back();
    }

    public function ajouter(Request $request)
    {
        $store = new Experience2;
        $store->data = $request->data;
        $store->save();
        return redirect()->back();
    }

    public function add(Request $request)
    {

        $validation = $request->validate([
            "data" => "required"
        ]); 

        $store = new Summary2;
        $store->data = $request->data;
        $store->save();
        return redirect()->back();
    }

    public function add2(Request $request)
    {

        $validation = $request->validate([
            "name" => "required",
            "date" => "required",
            "place" => "required",
            "paragraph" => "required"
        ]); 


        $store = new Education;
        $store->name = $request->name;
        $store->date = $request->date;
        $store->place = $request->place;
        $store->paragraph = $request->paragraph;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Education::find($id);
        return view("showEducation", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Experience::find($id);
        return view("editExperience", compact("edit"));
    }

    public function remplacer($id)
    {
        $edit = Experience2::find($id);
        return view("editExperience", compact("edit"));
    }

    public function edit1($id)
    {
        $edit = Summary::find($id);
        return view("editSummary", compact("edit"));
    }
    public function edit2($id)
    {
        $edit = Summary2::find($id);
        return view("editDonnee", compact("edit"));
    }

    public function edit3($id)
    {
        $edit = Education::find($id);
        return view("editEducation", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Experience::find($id);
        $update->name = $request->name;
        $update->date = $request->date;
        $update->place = $request->place;
        $update->save();
        return redirect("boExperience");
    }

    // public function edit($id)
    // {
    //     $edit = Experience::find($id);
    //     return view("editExperience", compact("edit"));
    // }

    // public function store(Request $request)
    // {
    //     $store = new Experience;
    //     $store->name = $request->name;
    //     $store->date = $request->date;
    //     $store->place = $request->place;
    //     $store->save();
    //     return redirect()->back();
    // }


    public function maj(Request $request, $id)
    {
        $update = Experience2::find($id);
        $update->data = $request->data;
        $update->save();
        return redirect("boExperience");
    }

    public function maj2(Request $request, $id)
    {

        $validation = $request->validate([
            "name" => "required",
            "paragraph" => "required"
        ]); 

        $update = Summary::find($id);
        $update->name = $request->name;
        $update->paragraph = $request->paragraph;
        $update->save();
        return redirect("boSummary");
    }

    public function maj3(Request $request, $id)
    {

        $validation = $request->validate([
            "data" => "required"
        ]); 

        $update = Summary2::find($id);
        $update->data = $request->data;
        $update->save();
        return redirect("boSummary");
    }

    public function maj4(Request $request, $id)
    {

        $validation = $request->validate([
            "name" => "required",
            "date" => "required",
            "place" => "required",
            "paragraph" => "required"
        ]); 

        $update = Education::find($id);
        $update->name = $request->name;
        $update->date = $request->date;
        $update->place = $request->place;
        $update->paragraph = $request->paragraph;
        $update->save();
        return redirect("boEducation");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Experience::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function delete($id)
    {
        $destroy = Experience2::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function delete3($id)
    {
        $destroy = Summary2::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function delete4($id)
    {
        $destroy = Education::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
