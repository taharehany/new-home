@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--hero-->
<section class="hero-header h-video transparent">
  <div class="hero-content">
    <div class="container">
      <div class="hero-text">
        <h2>أهلا بك في نيو هوم</h2>
        <h1>اعثر على منزل الأحلام</h1>
      </div>
      <div class="hero-search">
        <form action="" method="">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="select-area">
                <select class="select">
                  <option class="hidden-option" disabled selected>اختر شيئا</option>
                  <option value="1">الخيار 1</option>
                  <option value="2">الخيار 2</option>
                  <option value="3">الخيار 3</option>
                  <option value="4">الخيار 4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="select-area">
                <select class="select">
                  <option class="hidden-option" disabled selected>اختر شيئا</option>
                  <option value="1">الخيار 1</option>
                  <option value="2">الخيار 2</option>
                  <option value="3">الخيار 3</option>
                  <option value="4">الخيار 4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="select-area">
                <select class="select">
                  <option class="hidden-option" disabled selected>اختر شيئا</option>
                  <option value="1">الخيار 1</option>
                  <option value="2">الخيار 2</option>
                  <option value="3">الخيار 3</option>
                  <option value="4">الخيار 4</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <div class="buttons-area">
                <button class="btn submit" type="submit">بحث<i class="bi bi-search"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--hero-->

<!--hot properties-->
<section class="hot">
  <div class="container">
    <div class="main-title">
      <h2>ابحث عن عقار في أفضل المدن<span class="line"></span></h2>
    </div>
    <div class="row">
    @foreach ($cities as $city)
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="hot-box">
          <a href="{{ route('city.show', $city->id) }}">
            <div class="hot-image"><img src="{{ asset($city->image) }}" alt=""></div>
            <div class="hot-details">
              <h2>{{ $city->title }}</h2>
            </div>
           </a>
          </div>
      </div>
    @endforeach
    </div>
  </div>
</section>
<!--hot properties-->

<!--properties-->
<section class="properties">
  <div class="container">
    @foreach ($types as $type)
    <div class="property-content">
      <div class="title">
        <h2>{{ $type->title }}</h2><a href="{{ route('type.index', $type->id) }}">عرض الكل</a>
      </div>
      <div class="row">
        @foreach ($projects as $project)
          @if ($project->type_id === $type->id)
              <div class="col-md-6 col-lg-4">
                <div class="property-box">
                  <div class="property-image">
                  <a href="{{ route('project.show', $project->id) }}">
                     <img src="{{ asset($project->image) }}" alt="">
                  </a>
                  </div>
                  <div class="property-details">
                     <a href="{{ route('project.show', $project->id) }}">
                         <h2 class="title">{{ $project->title }}</h2>
                         <p class="location"><i class="bi-pin"></i>{{ $project->location }}</p>
                     </a>
                     <a class="btn" href="{{ route('project.show', $project->id) }}"><i class="bi bi-telephone"></i>اتصل بنا</a>
                     <a class="btn fav" href="#!"><i class="bi bi-whatsapp"></i>واتساب</a>
                  </div>
                </div>
              </div>
          @endif
        @endforeach
      </div>
    </div>
    @endforeach
  </div>
</section>
<!--properties-->
@endsection
