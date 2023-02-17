@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--breadcrumb-->
<nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url({{asset('front/images/backgrounds/broad.jpg')}})">
   <div class="container">
      <ol class="breadcrumb">
         <li class="breadcrumb-item active" aria-current="page">جميع المناطق</li>
      </ol>
   </div>
</nav>
<!--breadcrumb-->

<!--hot properties-->
<section class="hot">
   <div class="container">
      <div class="row">
         @if (count($cities) > 0)
         @foreach ($cities as $city)
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="hot-box">
               <a href="{{ route('city.show', $city->slug) }}">
                  <div class="hot-image"><img src="{{ asset($city->image) }}" alt=""></div>
                  <div class="hot-details">
                     <h2>{{ $city->title }}</h2>
                  </div>
               </a>
            </div>
         </div>
         @endforeach
         @else
         <h2 class="text-center">لا يوجد مدن</h2>
         @endif
      </div>
   </div>
</section>
<!--hot properties-->
@endsection
