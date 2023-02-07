@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('POST')
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>image</label>
                        <input class="form-control" type="file" name="image" accept=".png, .jpg, .jpeg, .svg, .gif" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" placeholder="Title" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>location</label>
                        <input class="form-control" type="text" name="location" placeholder="Location" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="">Select type</label>
                        <select class="form-select" name="type_id" required="">
                           @foreach ($types as $key => $type)
                              <option value="{{ $type->id }}">{{ $type->title }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="">Select City</label>
                        <select class="form-select" name="city_id" required="">
                           @foreach ($cities as $key => $city)
                              <option value="{{ $city->id }}">{{ $city->title }}</option>
                           @endforeach
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>description</label>
                        <textarea name="description" id="editor" rows="10" cols="80"></textarea>
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
