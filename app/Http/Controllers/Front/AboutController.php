<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function index()
   {
      $aboutme = Page::where('identifier', 'aboutme')->first();
      $reason = Page::where('identifier', 'reason')->first();

      return view('front.about', compact('aboutme', 'reason'));
   }
}
