<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\City;
use App\Models\Type;
use App\Models\ProjectDetails;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $data = Project::all();
      $types = Type::all();
      $cities = City::all();
      return view('admin.projects.index', compact('data', 'types', 'cities'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $cities = City::all();
      $types = Type::all();
      return view('admin.projects.create', compact('cities', 'types'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $data = $request->all();
      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         unset($data['image']);
      }
      $data ['slug']=Slug($data['title']);

      $general = Project::create($data);

      if ($request->image) {
         foreach ($request->image as $key => $value) {
            if (is_file($value)) {
               $image = upload_file($value, 'project_details');
               ProjectDetails::create([
                  'project_id' => $general->id,
                  'image' => $image,
                  'order' => $request->order[$key],
                  'desktop_col' => $request->desktop_col[$key],
                  'mobile_col' => $request->mobile_col[$key],
               ]);
            }
         }
      }

      return $general ? redirect(route('projects.index'))->with(['success' => 'تم الإضافة بنجاح']) : redirect()->back();
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $data = Project::findorfail($id);
      return view('admin.projects.show')->with(compact('data'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      $cities = City::all();
      $types = Type::all();
      $data = Project::findOrfail($id);
      return view('admin.projects.edit', compact('data', 'cities', 'types'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      $data = $request->all();
      $general = Project::where('id', $id)->first();
      if ($request->hasFile('image')) {
         $data['image'] = upload_file($request->file('image'), 'image');
      } else {
         $data['image'] = $general->image;
      }
      $data ['slug']=Slug($data['title']);

      $general->update($data);

      return redirect()->back();
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $general = Project::findOrFail($id);
      $general->delete();
      return redirect(route('projects.index'))->with(['success' => 'Deleted']);
   }

    public function project_data_remove (Request $request) {
      $project = ProjectDetails::findorfail($request->id)->delete();
      return response()->json(['status'=>1]);
    }
}
