<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('front.project.index', compact('projects'));
    }
    public function show($id)
    {
         $related_projects = Project::paginate(6);
         $project = Project::findorfail($id);
         return view('front.project.show', compact('project', 'related_projects'));
    }
}
