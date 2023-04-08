<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="Taha">
   <meta property="og:title" content="">
   <meta property="og:type" content="">
   <meta property="og:url" content="">
   <meta property="og:image" content="">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}">
   <!--[if lt IE 9]>
   <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js">
   </script>
   <![endif]-->
   <title>نيو هوم</title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Tajawal&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('front/css/over-style.css') }}">

   <!-- Hotjar Tracking Code for my site -->
   <script>
      (function(h, o, t, j, a, r) {
         h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
         };
         h._hjSettings = {
            hjid: 3442873,
            hjsv: 6
         };
         a = o.getElementsByTagName('head')[0];
         r = o.createElement('script');
         r.async = 1;
         r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
         a.appendChild(r);
      })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
   </script>
</head>

<body>
   <div class="main-wrapper">
      @if(session('message'))
      <div class='alert alert-success'>
         {{ session('message') }}
      </div>
      @endif
      @if($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      <!-- Modal -->
      <div class="modal form-modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="formModalLabel">طلب اتصال</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form action="{{route('contactus')}}" method="post">
                     @csrf()
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="form-group">
                              <div class="input-group has-validation">
                                 <input class="form-control" name="name" type="text" placeholder="الاسم" required="">
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group">
                              <input class="form-control" name="phone" type="text" placeholder="رقم الهاتف" required="">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-group mb-0">
                              <input class="form-control" name="project-name" type="text" placeholder="اسم المشروع">
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="submit" class="btn btn-primary d-block w-100">إرسال</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <header>
         <div class="alert top-alert alert-dismissible fade show mb-0" role="alert">
            <div class="text-center">
               <p>هل تريد الحصول على أحدث ماستر بلان وبروشور واسعار خاصة بالمشروع؟</p>
               <button type="button" class="btn btn-1">
                  <a href="https://wa.me/{{ settings()->whatsapp }}">تواصل معنا</a>
               </button>
               <button type="button" class="btn btn-2" data-bs-toggle="modal" data-bs-target="#formModal"><i class="bi bi-headset"></i> اطلب التفاصيل</button>
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
               <i class="bi bi-x"></i>
            </button>
         </div>

         <nav class="navbar main-nav navbar-expand-lg navbar-light bg-light">
            <div class="container"><a class="navbar-brand m-0 py-2" href="{{ route('main') }}"> <img src="{{ asset(settings()->logo) }}" alt="" style="max-width: 250px;"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false" aria-label="Toggle navigation">
                  <div class="hamburger-menu"><span></span><span></span><span></span></div>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('main') }}">الرئيسية</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('projects') }}">جميع المشاريع</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">المناطق</a>
                        <ul class="dropdown-menu">
                           @foreach(cities() as $city)
                           <li><a class="dropdown-item" href="{{ route('city.show', $city->slug) }}">{{ $city->title }}</a>
                           </li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">أنواع العقارات</a>
                        <ul class="dropdown-menu">
                           @foreach(types() as $type)
                           <li>
                              <a class="dropdown-item" href="{{ route('type.index', $type->slug) }}">{{ $type->title }}</a>
                           </li>
                           @endforeach
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

         <!--side menu in mobile only-->
         <div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1" aria-labelledby="side_menu_label">
            <div class="offcanvas-header">
               <button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="navbar">
                  <div class="collapsed navbar-collapse" id="navbarNavSide">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="{{ route('main') }}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('projects') }}">جميع المشاريع</a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">المناطق</a>
                           <ul class="dropdown-menu">
                              @foreach(cities() as $city)
                              <li><a class="dropdown-item" href="{{ route('city.show', $city->slug) }}">{{ $city->title }}</a></li>
                              @endforeach
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">أنواع العقارات</a>
                           <ul class="dropdown-menu">
                              @foreach(types() as $type)
                              <li>
                                 <a class="dropdown-item" href="{{ route('type.index', $type->slug) }}">{{ $type->title }}</a>
                              </li>
                              @endforeach
                           </ul>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--header-->
