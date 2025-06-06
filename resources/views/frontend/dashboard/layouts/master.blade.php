<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.nice-number.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.calendar.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/add_row_custon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/mobile_menu.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.exzoom.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/multiple-image-video.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/ranger_style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.classycountdown.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/venobox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- <link rel="stylesheet" href="css/rtl.css"> -->
</head>

<body>


  <!--=============================
    DASHBOARD MENU START
  ==============================-->
  <div class="wsus__dashboard_menu">
    <div class="wsusd__dashboard_user">
      <img src="images/dashboard_user.jpg" alt="img" class="img-fluid">
      <p>anik roy</p>
    </div>
  </div>
  <!--=============================
    DASHBOARD MENU END
  ==============================-->


  <!--=============================
    DASHBOARD START
  ==============================-->
  <section id="wsus__dashboard">
    <div class="container-fluid">
      @include('frontend.dashboard.layouts.sidebar')
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=============================
    DASHBOARD START
  ==============================-->


  <!--============================
      SCROLL BUTTON START
    ==============================-->
  <div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
  </div>
  <!--============================
    SCROLL BUTTON  END
  ==============================-->


  <!--jquery library js-->
  <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
  <!--bootstrap js-->
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <!--font-awesome js-->
  <script src="{{ asset('frontend/js/Font-Awesome.js') }}"></script>
  <!--select2 js-->
  <script src="{{ asset('frontend/js/select2.min.js') }}"></script>
  <!--slick slider js-->
  <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
  <!--simplyCountdown js-->
  <script src="{{ asset('frontend/js/simplyCountdown.js') }}"></script>
  <!--product zoomer js-->
  <script src="{{ asset('frontend/js/jquery.exzoom.js') }}"></script>
  <!--nice-number js-->
  <script src="{{ asset('frontend/js/jquery.nice-number.min.js') }}"></script>
  <!--counter js-->
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.countup.min.js') }}"></script>
  <!--add row js-->
  <script src="{{ asset('frontend/js/add_row_custon.js') }}"></script>
  <!--multiple-image-video js-->
  <script src="{{ asset('frontend/js/multiple-image-video.js') }}"></script>
  <!--sticky sidebar js-->
  <script src="{{ asset('frontend/js/sticky_sidebar.js') }}"></script>
  <!--price ranger js-->
  <script src="{{ asset('frontend/js/ranger_jquery-ui.min.js') }}"></script>
  <script src="{{ asset('frontend/js/ranger_slider.js') }}"></script>
  <!--isotope js-->
  <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
  <!--venobox js-->
  <script src="{{ asset('frontend/js/venobox.min.js') }}"></script>
  <!--classycountdown js-->
  <script src="{{ asset('frontend/js/jquery.classycountdown.js') }}"></script>

  <!--main/custom js-->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    @if ($errors->any())
        @foreach ($errors->all() as $error )
          @php
              toastr()->error($error);
          @endphp
        @endforeach
    @endif
  </script>

  <script>
      $(document).ready(function(){

$('body').on('click', '.delete-item', function(event){

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  event.preventDefault();

  let deteleUrl = $(this).attr('href');

  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {           
      $.ajax({
        'type':'DELETE',
        'url': deteleUrl,

        success:function(data){
          if(data.status == 'success'){
            Swal.fire({
              title: "Deleted!",
              text: data.message,
              icon: "success"
            });
            window.location.reload();
          }else if(data.status == 'error'){
            Swal.fire({
              title: "Can't Delete!",
              text: data.message,
              icon: "error"
            });
           
          }            
          
        },
        error:function(xhr, status, error){
            console.log(error);
        }

        })
     
    }
  });

});

});

  </script>

  

</body>

</html>