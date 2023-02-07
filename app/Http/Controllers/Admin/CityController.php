<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = City::all();
        return view('admin.cities.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cities.create');
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

       $general = City::create($data);

       return $general ? redirect(route('cities.index'))->with(['success' => 'تم الإضافة بنجاح']) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = City::findOrfail($id);
        return view('admin.cities.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $general = City::where('id', $id)->first();
        if ($request->hasFile('image')) {
           $data['image'] = upload_file($request->file('image'), 'image');
        } else {
           $data['image'] = $general->image;
        }

        $general->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $general = City::findOrFail($id);
       $general->delete();
       return redirect(route('cities.index'))->with(['success' => 'Deleted']);
    }
}

