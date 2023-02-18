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
      $type = Type::where('slug',$slug)->first();

       $types = Type::where('slug', $slug)->with('Projects')->first();
         if(!$types){
            return abort(404);
         }
       return view('front.type.index', compact('types', 'type'));
   }
}
