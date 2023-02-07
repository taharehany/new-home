@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('projects.update',$data->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('put')
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>image</label>
                        <img class="preview" src="{{ asset($data->image) }}">
                        <input class="form-control" type="file" name="image" accept=".png, .jpg, .jpeg, .svg, .gif">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" placeholder="title" value="{{ old('title', $data->title) }}" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>location</label>
                        <input class="form-control" type="text" name="location" placeholder="Location" value="{{ old('location', $data->location) }}" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="">Select type</label>
                        <select class="form-select" name="type_id" required="">
                           @foreach ($types as $key => $type)
                              <option value="{{ $type->id }}" @if ($data->type_id == $type->id)
                                  selected="selected"
                              @endif>
                              {{ $type->title }}
                              </option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="">Select City</label>
                        <select class="form-select" name="city_id" required="">
                           @foreach ($cities as $key => $city)
                              <option value="{{ $city->id }}"@if ($data->city_id == $city->id)
                                   selected="selected"
                               @endif>{{ $city->title }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>description</label>
                        <textarea name="description" id="editor" placeholder="description" rows="10" cols="80">{{ old('description', $data->description) }}</textarea>
                        <script>
                            CKEDITOR.replace( 'editor', {
                                language: 'ar',
                            });
                        </script>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-btn">
                        <button class="btn btn-primary hvr-sweep-to-top" type="submit">Save changes</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
