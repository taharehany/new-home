<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="description here">
    <meta name="og:title" property="og:title" content="Awesome Open Graph here">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&amp;display=swap" rel="stylesheet">
    <!--
    [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]
    -->
    <title>dashboard | login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
    <style>
      .signin-area, .signup-area {
         display: block
      }
    </style>
  </head>
  <body>
    <div class="main-wrapper">
      <div class="signin-area">
        <div class="signin part">
          <div class="form">
            <div class="container">
              <div class="title">
                <h2>login to dashboard</h2>
              </div>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                           <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>password</label>
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                           <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group remember-forget">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                           <label class="form-check-label" for="remember">
                                 {{ __('Remember Me') }}
                           </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-btn">
                    <button type="submit" class="btn btn-primary hvr-sweep-to-top">
                        {{ __('Login') }}
                     </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('admin') }}/js/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/js/select2.min.js"></script>
    <script src="{{ asset('admin') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('admin') }}/js/wow.min.js"></script>
    <script src="{{ asset('admin') }}/js/chart.min.js"></script>
    <script src="{{ asset('admin') }}/js/chart.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin') }}/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('admin') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('admin') }}/js/ckeditor.js"></script>
    <script src="{{ asset('admin') }}/js/aos.js"></script>
    <script src="{{ asset('admin') }}/js/script.js"></script>
  </body>
</html>
