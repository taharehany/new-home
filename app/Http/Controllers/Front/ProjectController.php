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
   public function search()
   {
      $projects = Project::all();
      if (request('city') && request('type')) {
         $projects = Project::where('city_id', request('city'))->where('type_id', request('type'))->get();
      } else if (request('city')) {
         $projects = Project::where('city_id', request('city'))->get();
      } else if (request('type')) {
         $projects = Project::where('type_id', request('type'))->get();
      }
      return view('front.project.index', compact('projects'));
   }
}
