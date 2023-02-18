<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Type;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $cities = City::all();
      $types = Type::with('Projects')->get();
      $projects = Project::get();

      // dd(count($types) * 6);

      return view('front.index', compact('projects', 'cities', 'types'));
   }
}
