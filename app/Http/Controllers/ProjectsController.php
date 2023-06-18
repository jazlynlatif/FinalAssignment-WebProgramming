<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
        $data = Projects::get();
        return view('homepage', ['data' => $data]);
    }
    
    public function dashie()
    {
        $datas = Projects::get();
        return view('dashboard', ['datas' => $datas]);
    }
    public function addProjects() {
        return view('addprojects');
    }
    public function saveProject(Request $request) {
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);
        $project = new Projects();

        $project->name= $request->name;
        $project->description= $request->description;
        $project->category= $request->category;
        $project->status= $request->status;

        $res = $project->save();
        if ($res) {
            return back()->with('success', 'You have saved the project succesfully');
        } else {
            return back()->with('fail', 'Project not saved');
        }
    }
    public function editProject($id) {
        $data = Projects::where('id','=',$id)->first();
        return view('editprojects', compact('data'));
    }
    public function updateProject(Request $request) {
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $id= $request->id;
        $name= $request->name;
        $description= $request->description;
        $category= $request->category;
        $status= $request->status;

        Projects::where('id','=',$id)->update([
            'name' =>$name,
            'description' =>$description,
            'category' =>$category,
            'status' =>$status
        ]);
        return redirect()->back()->with('success', 'Project Updated Succesfully');

    }
    public function deleteProject($id) {
        Projects::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Project Deleted Succesfully');
    }
}
