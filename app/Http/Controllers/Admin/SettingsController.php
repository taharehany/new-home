<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit()
   {
      $data = Setting::first();
      return view('admin.settings.edit', compact('data'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request)
   {
      $data = $request->all();
      $general = Setting::first();

      if ($request->hasFile('logo')) {
         $data['logo'] = upload_image($request->file('logo'), 'logo');
      }
      $general->update($data);

      return $general ? redirect(route('settings.edit'))->with(['success' => 'تم تعديل بنجاح']) : redirect()->back();
   }
}
