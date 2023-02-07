@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('cities.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('POST')
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>Image</label>
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
