@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--breadcrumb-->
<nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url({{asset('front/images/backgrounds/broad.jpg')}})">
   <div class="container">
      <ol class="breadcrumb">
         <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
      </ol>
   </div>
</nav>
<!--breadcrumb-->

<!--single property-->
<section class="single-property-page">
   <div class="container">
      <div class="property-content">
         <div class="row">
            <div class="col-md-8 col-lg-8">
               <!--images-->
               <div class="image">
                  <img src="{{ asset($project->image) }}" class="img-fluid mb-3 w-100" style="border-radius: 10px" alt="">
               </div>
               <div class="single-property-box">
                  <!--details-->
                  <div class="single-property-details">
                     <h2>{{ $project->title }}</h2>
                  </div>
                  <!--features-->

                  <!--details-->
                  <div class="single-property-text">
                     <div class="subtitle">
                        <h3>التفاصيل</h3><span class="line"></span>
                     </div>
                     {!! $project->description !!}
                  </div>
               </div>
            </div>

            <!--aside area-->
            <div class="col-md-4 col-lg-4">
               <aside>
                  <div class="list-group">
                     <a class="list-group-item list-group-item-action" href="tel:{{ settings()->mobile }}">
                        <i class="bi bi-telephone-outbound"></i>{{ settings()->mobile }}
                     </a>
                     <a class="list-group-item list-group-item-action" href="https://wa.me/{{ settings()->whatsapp }}">
                        <i class="bi bi-whatsapp"></i>{{ settings()->whatsapp }}
                     </a>
                  </div>

                  <div class="related-properties single-property-form mb-3">
                     <!-- contact form -->
                     <h4 class="mx-auto mb-3">تواصل معنا الآن</h4>
                     <form action="{{route('contactus')}}" method="post">
                        @csrf()

                        <input name="project-name" value="{{ $project->title }}" hidden>

                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <div class="input-group has-validation">
                                    <input class="form-control" name="name" type="text" placeholder="الاسم" required="">
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group mb-0">
                                 <input class="form-control" name="phone" type="text" placeholder="رقم الهاتف" required="">
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" class="btn btn-primary d-block w-100">إرسال</button>
                        </div>
                     </form>
                  </div>

                  <div class="related-properties">
                     <div class="subtitle">
                        <h3>عقارات ذات صلة</h3>
                     </div>
                     <div class="row">
                        @forelse ($related_projects as $related_project)
                        <div class="col-sm-6 col-md-12 col-lg-6">
                           <div class="property-box">
                              <div class="property-image">
                                 <a href="{{ route('project.show', [@$related_project->slug,$related_project->CityData->slug]) }}">
                                    <img src="{{ asset($related_project->image) }}" alt="">
                                 </a>
                              </div>
                              <div class="property-details">
                                 <a href="{{ route('project.show', [@$related_project->slug,$related_project->CityData->slug]) }}">
                                    <h2 class="title">{{ $related_project->title }}</h2>
                                    <p class="location"><i class="bi-pin"></i>{{ $related_project->location }}</p>
                                 </a>
                              </div>
                           </div>
                        </div>
                        @empty
                        <p>لا يوجد عقارات</p>
                        @endforelse
                     </div>
                  </div>
               </aside>
            </div>
         </div>
      </div>
   </div>
</section>
<!--single property-->
@endsection
