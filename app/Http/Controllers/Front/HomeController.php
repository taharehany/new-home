<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Type;
use App\Models\Project;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

use App\Models\contactus;
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


    public function contactus()
    {
        $data = request()->all();
        $data['ip'] =request()->ip();
        contactus::create($data);
          try {
            $email = env('send_to');

            Mail::to($email)->send(new ContactUsMail(['html.view','data' => $data]));
        } catch (\Exception $e) {
            dd($e);
        }
        return back();
    }
}
