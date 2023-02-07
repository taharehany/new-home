@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form show-page">
            <form>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" placeholder="" value="{{ old('title', $data->title) }}" readonly>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>description</label>
                        <div class="p-3 bg-white" style="border-radius: 10px">{!! old('description', $data->description) !!}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>location</label>
                        <input class="form-control" type="text" name="location" placeholder="" value="{{ old('location', $data->location) }}" readonly>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>image</label>
                  <div class="row">
                     <div class="col-3 box">
                        <img class="img-fluid box-image" src="{{ asset($data->image) }}" alt="alt">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
