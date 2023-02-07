<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Type;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
      $cities = City::all();
      $types = Type::all();
      $projects = Project::all();

      return view('front.index', compact('projects', 'cities', 'types'));
   }
}
