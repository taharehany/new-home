<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Project;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
     {
         $cities = City::all();
         return view('front.city.index', compact('cities'));
     }
    public function show($slug)
     {
         $city = City::where('slug',$slug)->first();
         if(!$city){
            return abort(404);
         }
         $projects = Project::where('city_id', $city->id)->get();
         return view('front.city.show', compact('city', 'projects'));
     }
}
