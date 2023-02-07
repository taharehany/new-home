<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Type::all();
        return view('admin.types.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
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

       $general = Type::create($data);

       return $general ? redirect(route('types.index'))->with(['success' => 'تم الإضافة بنجاح']) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
     {
         $data = Type::findOrfail($id);
         return view('admin.types.edit', compact('data'));
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Models\Type  $type
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         $data = $request->all();
         $general = Type::where('id', $id)->first();
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
      * @param  \App\Models\Type  $type
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
        $general = Type::findOrFail($id);
        $general->delete();
        return redirect(route('types.index'))->with(['success' => 'Deleted']);
     }
}

