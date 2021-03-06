<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Project;

class ProjectsController extends Controller
{
    public function index() 
    {

        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);  // kan ook schrijven "compact('projects')" ipv [..]
    }

    public function show() 
    {

        

    }

    public function create() 
    {

        return view('projects.create');
       
    }

    public function store() 
    {

        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
       
    }

    public function edit($id) 
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', ['project'=>$project]);           //of: compact('project')

    }

    public function update($id) 
    {
        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy($id) 
    {

        Project::findOrFail($id)->delete();
        
        return redirect('/projects');

    }
    
}
