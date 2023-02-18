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
   <style>
      .hero-header {
         padding: 20vh 0 15vh;
      }
      ul {
         padding: revert;
      }
   </style>
</head>

<body>
   <div class="main-wrapper">
      <header>
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
