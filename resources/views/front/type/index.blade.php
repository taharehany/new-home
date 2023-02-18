@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--breadcrumb-->
<nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url({{asset('front/images/backgrounds/broad.jpg')}})">
   <div class="container">
      <ol class="breadcrumb">
         <li class="breadcrumb-item active" aria-current="page">جميع العقارات</li>
      </ol>
   </div>
</nav>
<!--breadcrumb-->

<!--properties-->
<section class="properties properties-page">
   <div class="container">
      <div class="property-content">
         <div class="row">
            @if (count($types->Projects) > 0)
            @foreach ($types->Projects as $project)
            <div class="col-md-12 col-lg-4">
               <div class="property-box">
                  <div class="property-image"><a href="{{ route('project.show', [@$project->slug,$project->CityData->slug]) }}"><img src="{{ asset($project->image) }}" alt=""></a></div>
                  <div class="property-details">
                     <a style="text-decoration: none;" href="{{ route('project.show', [@$project->slug,$project->CityData->slug]) }}">
                        <h2 class="title">{{ $project->title }}</h2>
                        <p class="location"><i class="bi-pin"></i>{{ $project->location }}</p>
                     </a>
                     <a class="btn" href="tel:{{ settings()->mobile }}">
                        <i class="bi bi-telephone"></i>اتصل بنا</a>
                     <a class="btn fav" href="https://wa.me/{{ settings()->whatsapp }}"><i class="bi bi-whatsapp"></i>واتساب</a>
                  </div>
               </div>
            </div>
            @endforeach

            @else
            <h2 class="text-center">لا يوجد عقارات</h2>
            @endif
         </div>
      </div>
   </div>
</section>
<!--properties-->
@endsection
