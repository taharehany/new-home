$(document).ready(function () {
   "use strict";
   let dropdowntoggle = $("header .nav-link.dropdown-toggle");
   let navbarToggler = $(".topnav .navbar-toggler");
   let header = $("header");

   //toggle between menue and x in navbar
   $("header .navbar-toggler").on("click", function () {
      if (navbarCollapse.hasClass("active")) {
         $(this).addClass("close");
      } else {
         $(this).removeClass("close");
      }
   });

   //dropdown toggle
   dropdowntoggle.on("click", function () {
      $(this).siblings(".dropdown-menu").slideToggle(250);
      $(this).toggleClass("rotate");
   });

   // if ($("header .nav-item.dropdown").hasClass("active")) {
   //   $(this).find("header .dropdown-menu").slideDown();
   // }

   navbarToggler.on("click", function () {
      header.toggleClass("active");
   });

   //toggle between menue and x in navbar
   navbarToggler.on("click", function () {
      if (header.hasClass("active")) {
         $(this).addClass("close");
      } else {
         $(this).removeClass("close");
      }
   });

   $(".main-content").on("click", function () {
      header.removeClass("active");
      navbarToggler.removeClass("close");
   });

   //alert warning
   $(".alert.alert-warning button.close").on("click", function () {
      $(".alert.alert-warning").fadeOut();
   });

   //wow
   new WOW().init();

   //loading
   $(".loading").delay().fadeOut();

   //   dropdown.each(function () {
   //     if ($(this).hasClass("active")) {
   //       $(this).find(".dropdown-menu").addClass("show");
   //     }
   //   });

   $("#example").DataTable();

   // $(window).on("scroll", function () {
   //   if ($(this).scrollTop() > 1) {
   //     $(".topnav").addClass("sticky");
   //   } else {
   //     if ($(this).scrollTop() < 1) {
   //       $(".topnav").removeClass("sticky");
   //     }
   //   }
   // });

   //select 2
   $(".select2").select2();

   //date picketr
   $(".datepicker").datepicker({
      todayBtn: true,
      calendarWeeks: true,
      autoclose: true,
      todayHighlight: true,
      beforeShowDay: function (date) {
         if (date.getMonth() == (new Date()).getMonth())
            switch (date.getDate()) {
               case 4:
                  return {
                     tooltip: "Example tooltip",
                     classes: "active"
                  };
               case 8:
                  return false;
               case 12:
                  return "green";
            }
      },
      beforeShowMonth: function (date) {
         if (date.getMonth() == 8) {
            return false;
         }
      },
      beforeShowYear: function (date) {
         if (date.getFullYear() == 2007) {
            return false;
         }
      },
      datesDisabled: ["05/06/2021", "05/21/2021"],
      toggleActive: true,
      defaultViewDate: {
         year: 1977,
         day: 25
      }
   });

   let repeateContainer = `<div class="row repeated">
      <div class="col-lg-5">
         <div class="form-group">
            <label>image</label>
            <input class="form-control" type="file" name="image[]" multiple="" accept=".png, .jpg, .jpeg, .svg" required="">
         </div>
      </div>
      <div class="col-lg-2">
         <div class="form-group">
            <label>image order</label>
            <input class="form-control" type="number" name="order[]" placeholder="order" required="">
         </div>
      </div>
      <div class="col-lg-2">
         <div class="form-group">
            <label>in desktop (max 12)</label>
            <input class="form-control" type="number" min="1" max="12" name="desktop_col[]" placeholder="in desktop" required="">
         </div>
      </div>
      <div class="col-lg-2">
         <div class="form-group">
            <label>in mobile (max 12)</label>
            <input class="form-control" type="number" min="1" max="12" name="mobile_col[]" placeholder="in mobile" required="">
         </div>
      </div>
      <div class="col-lg-1">
         <div class="form-group remove-div">
            <button type="button" data-item-id="{{$value->id}}" class="remove_field">-</button>
         </div>
      </div>
      </div>`

   $('#add_field').on('click', function (e) {
      e.preventDefault()
      $('#repeate_container').append(`${repeateContainer}`)
   })

   $(document).on('click','.remove_field', function (e) {
      e.preventDefault()
      $(this).closest('div[class="row repeated"]').remove();
      $.ajax({
         url: delete_route,
         type: 'GET',
         data: {
            'id':$(this).attr('data-item-id')
         },
         dataType: 'json', // added data type
         success: function(res) {}
     });

   })
});
