      <footer>
         <div class="container">
            <div class="footer-content">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="footer-box">
                        <h3>من نحن</h3>
                        <div class="footer-logo">
                           <p>{{ settings()->about }}</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="footer-box">
                        <h3>صفحات هامة</h3>
                        <div class="main">
                           <ul>
                              @foreach(types() as $type)
                              <li><a href="{{ route('type.index', $type->slug) }}">{{ $type->title }}</a></li>
                              @endforeach
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="footer-box">
                        <h3>معلومات التواصل</h3>
                        <div class="contact">
                           <ul>
                              <li> <i class="bi bi-envelope"> </i><a href="mailto:{{ settings()->email }}">{{ settings()->email }}</a></li>
                              <li> <i class="bi bi-telephone"></i><a href="tel:{{ settings()->mobile }}" dir="ltr">{{ settings()->mobile }}</a></li>
                              <li><i class="bi bi-pin-map"></i><span>{{ settings()->address }}</span></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="copy-text">
               <p>جميع الحقوق محفوظة</p>
            </div>
         </div>
      </footer>

      <div class="sticky-contact">
         <div class="box">
            <button data-bs-toggle="modal" data-bs-target="#formModal">
               <i class="bi bi-headset"></i>
               <span>طلب اتصال</span>
            </button>
         </div>
         <div class="box">
            <a href="tel:{{ settings()->mobile }}">
               <i class="bi bi-telephone"></i>
               <span>اتصل الآن</span>
            </a>
         </div>
         <div class="box">
            <a href="https://wa.me/{{ settings()->whatsapp }}">
               <i class="bi bi-whatsapp"></i>
               <span>واتساب</span>
            </a>
         </div>
      </div>
      <!--footer part-->
      </div>

      <!--scripts-->
      <script src="{{ asset('front/js/jquery.min.js') }}"></script>
      <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('front/js/fancybox.umd.js') }}"></script>
      <script src="{{ asset('front/js/dropkick.js') }}"></script>
      <script src="{{ asset('front/js/slick.min.js') }}"></script>
      <script src="{{ asset('front/js/bideo.js') }}"></script>
      <script src="{{ asset('front/js/script.js') }}"></script>
      </body>

      </html>
