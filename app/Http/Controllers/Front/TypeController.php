<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class TypeController extends Controller
{
   public function show($id)
   {
       $projects = Project::where('type_id', $id)->get();
       return view('front.type.index', compact('projects'));
   }
}
