$(document).ready(function () {
  "use strict";

  $(".side-navigation .sub-menu > a").click(function (e) {
    $(".side-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
      e.stopPropagation()
  })

  //fixed header
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();

    if (scroll >= 5) {
      $("header .navbar.main-nav").addClass("fixed");
    } else {
      $("header .navbar.main-nav").removeClass("fixed");
    }
  });

  //dropdown dropkick select
  $(".select").dropkick({
    mobile: true
  });

  //toast notification
  let toastTrigger = document.getElementById('addToFavBtn')
  let toastLiveExample = document.getElementById('favToast')
  if (toastTrigger) {
    toastTrigger.addEventListener('click', function () {
      let toast = new bootstrap.Toast(toastLiveExample)
      toast.show();
    })
  }

  //filter home page
  $(".dk-option:not(.dk-option-disabled)").on("click", function () {
    let dkOption = $(this).context.innerText;
    $(".filter .filter-slug").text(dkOption);

    if ($(".filter .filter-slug").text() !== "") {
      $(".result .filter").css("display", "block");
      $(".filter .close").removeClass("d-none");
    }
  });

  $(".result .filter .close").on("click", function () {
    $(".result .filter").css("display", "none");
  });


  //validate form
  (function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    let forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })();

  //check if input file is more than ... images
  $(".advertise input[type='file']").change(function () {
    let fileUpload = $(".advertise input[type='file']");
    // console.log(fileUpload[0].files[0]);
    if (parseInt(fileUpload.get(0).files.length) > 2) {
      // alert("You can only upload a maximum of 5 files");
      $(this).parent().find(".invalid-tooltip").css("display", "block").text("must be less than 3 images")
      fileUpload.val("");
    } else {
      $(this).parent().find(".invalid-tooltip").css("display", "none")
    }
  });


  //single property slider
  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    autoplay: true,
    autoplaySpeed: 2000,
    asNavFor: '.slider-nav'
  });

  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '30px',
    responsive: [{
      breakpoint: 575,
      settings: {
        slidesToShow: 2,
      }
    }
  ]
  });

  //featured property slider
  $('.featured-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: false,
    autoplay: true,
    autoplaySpeed: 20000,
    dots: false,
    focusOnSelect: true,
    centerMode: true,
    centerPadding: '250px',
    responsive: [{
        breakpoint: 1024,
        settings: {
          centerPadding: '100px',
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerPadding: '100px',
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerPadding: '50px',
        }
      }
    ]
  });

  $('a[data-slide]').click(function (e) {
    e.preventDefault();
    let slideno = $(this).data('slide');
    $('.slider-nav').slick('slickGoTo', slideno - 1);
  });

  /* Hero Video Header - Mouse Effect */
  let image,
    appending,
    imageCanvas,
    imageCanvasContext,
    lineCanvas,
    lineCanvasContext,
    pointLifetime,
    points = [];

  function start() {
    document.addEventListener('mousemove', onMouseMove);
    window.addEventListener('resize', resizeCanvases);
    appending.appendChild(imageCanvas);
    resizeCanvases();
    tick();
  }

  function onMouseMove(event) {
    let scroll = 0;
    if (!$(".search-popup").length)
      scroll = $(document).scrollTop();
    points.push({
      time: Date.now(),
      x: event.clientX,
      y: event.clientY + scroll
    });
  }

  function resizeCanvases() {
    if (!("disableRubber" in window)) {
      setTimeout(function () {
        let c = setInterval(function () {
          if ($(".hero-header canvas").length) {
            imageCanvas.width = lineCanvas.width = $(".hero-header canvas").parent().width();
            imageCanvas.height = lineCanvas.height = $(".hero-header canvas").parent().height();
          }
        }, 1);
        setTimeout(function () {
          clearInterval(c);
        }, 200);
      }, 200);
    }
  }

  function tick() {
    points = points.filter(function (point) {
      let age = Date.now() - point.time;
      return age < pointLifetime;
    });
    drawLineCanvas();
    drawImageCanvas();
    requestAnimationFrame(tick);
  }

  function drawLineCanvas() {
    let minimumLineWidth = 150;
    let maximumLineWidth = 150;
    let lineWidthRange = maximumLineWidth - minimumLineWidth;
    let maximumSpeed = 50;
    lineCanvasContext.clearRect(0, 0, lineCanvas.width, lineCanvas.height);
    lineCanvasContext.lineCap = 'round';
    lineCanvasContext.shadowBlur = 20;
    lineCanvasContext.shadowColor = '#000';
    for (let i = 1; i < points.length; i++) {
      let point = points[i];
      let previousPoint = points[i - 1];
      let distance = getDistanceBetween(point, previousPoint);
      let speed = Math.max(0, Math.min(maximumSpeed, distance));
      let percentageLineWidth = (maximumSpeed - speed) / maximumSpeed;
      lineCanvasContext.lineWidth = minimumLineWidth + percentageLineWidth * lineWidthRange;
      let age = Date.now() - point.time;
      let opacity = (pointLifetime - age) / pointLifetime;
      lineCanvasContext.strokeStyle = 'rgba(0, 0, 0, ' + opacity + ')';
      lineCanvasContext.beginPath();
      lineCanvasContext.moveTo(previousPoint.x, previousPoint.y);
      lineCanvasContext.lineTo(point.x, point.y);
      lineCanvasContext.stroke();
    }
  }

  function getDistanceBetween(a, b) {
    return Math.sqrt(Math.pow(a.x - b.x, 2) + Math.pow(a.y - b.y, 2));
  }

  function drawImageCanvas() {
    let top = 0,
      left = 0;
    let width = imageCanvas.width;
    let height = imageCanvas.width / image.naturalWidth * image.naturalHeight;
    if (height < imageCanvas.height) {
      width = imageCanvas.height / image.naturalHeight * image.naturalWidth;
      height = imageCanvas.height;
      left = -(width - imageCanvas.width) / 2;
    } else {
      top = -(height - imageCanvas.height) / 2;
    }

    imageCanvasContext.clearRect(0, 0, imageCanvas.width, imageCanvas.height);
    imageCanvasContext.globalCompositeOperation = 'source-over';
    imageCanvasContext.drawImage(image, left, top, width, height);
    imageCanvasContext.globalCompositeOperation = 'destination-in';
    imageCanvasContext.drawImage(lineCanvas, 0, 0);

  }

  function addCanvasEffect() {
    image = document.querySelector('.clear-image');
    appending = document.querySelector('.bg-container');
    imageCanvas = document.createElement('canvas');
    imageCanvasContext = imageCanvas.getContext('2d');
    lineCanvas = document.createElement('canvas');
    lineCanvasContext = lineCanvas.getContext('2d');
    pointLifetime = 1000;
    points = [];
    if (image.complete) {
      start();
    } else {
      image.onload = start;
    }
  }

  function setCanvasEffect() {
    if (!("disableRubber" in window)) {
      let href = window.location.href;
      let dir = href.substring(0, href.lastIndexOf('/')) + "/";
      let bgImage;
      let cElement;
      if ($(".h-video").length)
        cElement = $(".h-video");
      else if ($(".h-slideshow").length)
        cElement = $(".h-slideshow");
      else if ($(".hero-header").not(".login-popup,.review-popup,.pm-popup").length)
        cElement = $(".hero-header").not(".login-popup,.review-popup,.pm-popup");
      bgImage = cElement.find(".hero-image").css("background-image");
      if (bgImage !== "none") {
        bgImage = bgImage.replace(dir, "");
        bgImage = bgImage.replace(' ', "").replace(' ', "").replace(' ', "").replace(' ', "").replace(' ', "");
        bgImage = bgImage.replace('url(\"', "").replace("url(\'", "").replace("url(", "").replace('")', "");
        bgImage = bgImage.replace("')", "").replace(")", "");
        cElement
          .append('<div class="bg-container bg-media"><img class="clear-image" src="' + bgImage + '"></div>');
        addCanvasEffect();
      }
    }
  }

  /* Prepare Interface */
  let he_ = $(".hero-header");
  he_.prepend('<div class="hero-image"></div>');
  he_.prepend('<div class="overlay"></div>');
  he_.prepend('<div class="dot-overlay"></div>');
  // setCanvasEffect();
});