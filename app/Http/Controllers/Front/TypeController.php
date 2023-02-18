<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
   public function show($slug)
   {
       $typs = Type::where('slug', $slug)->with('projects')->get();
         if(!$typs){
            return abort(404);
         }
       return view('front.type.index', compact('projects'));
   }
}
