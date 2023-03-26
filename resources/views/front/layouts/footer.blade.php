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

      <!-- GetButton.io widget -->
      <script type="text/javascript">
         (function() {
            var options = {
               call: "01271408657", // Call phone number
               whatsapp: "01271408657", // WhatsApp number
               call_to_action: "راسلنا", // Call to action
               button_color: "#E74339", // Color of button
               position: "left", // Position may be 'right' or 'left'
               order: "كلمنا,واتساب", // Order of buttons
            };
            var proto = 'https:',
               host = "getbutton.io",
               url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
               WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
         })();
      </script>
      <!-- /GetButton.io widget -->
      </body>

      </html>
