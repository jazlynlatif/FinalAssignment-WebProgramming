<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function edu() {
        $data = Education::get();
        return view('dashboard', ['data' => $data]);
    }
    public function edutwo() {
        $datas = Education::get();
        return view('homepage', ['datas' => $datas]);
    }
    public function addEdu() {
        return view('education.addedu');
    }
    public function saveEdu(Request $request) {
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $project = new Education();

        $project->name= $request->name;
        $project->description= $request->description;

        $res = $project->save();
        if ($res) {
            return back()->with('success', 'You have saved the education succesfully');
        } else {
            return back()->with('fail', 'Education not saved');
        }
    }
    public function editEdu($id) {
        $data = Education::where('id','=',$id)->first();
        return view('education.editprojects', compact('data'));
    }
    public function updateEdu(Request $request) {
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $id= $request->id;
        $name= $request->name;
        $description= $request->description;

        Education::where('id','=',$id)->update([
            'name' =>$name,
            'description' =>$description,
        ]);
        return redirect()->back()->with('success', 'Education Updated Succesfully');

    }
}
