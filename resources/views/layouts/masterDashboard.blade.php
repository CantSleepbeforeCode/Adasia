<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta name="keywords" content="Adasia" />
  <meta name="author" content="Linyar Borneo">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Adasia - Indonesia Culture Music Video Application">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="_token" content="{{ csrf_token() }}">
  <title>Adasia - @yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="/images/logoAdasia.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/extensions/toastr.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/plugins/extensions/toastr.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/core/menu/menu-types/vertical-compact-menu.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/style-my-modal.css" type="text/css" />
  @yield('style')
  <style media="screen">
    .logout-button:focus{
      background-color: darken !important;
    }
  </style>
</head>

<body class="vertical-layout vertical-compact-menu 2-columns   menu-expanded fixed-navbar" data-open="click"
data-menu="vertical-compact-menu" data-col="2-columns">

<!-- //////////////////////////////// NAVBAR ////////////////////////////////////////////-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark  navbar-shadow navbar-brand-center">
<div class="navbar-wrapper">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item mobile-menu d-md-none mr-auto"><a
        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i style="color: gold;"
        class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item">
          <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
            data-target="#navbar-mobile"><i style="color: gold;" class="la la-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                href="#"><i style="color: gold;" class="ft-menu"></i></a></li>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a
                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                  <span class="mr-1"><font id="greeting"></font>,
                <span class="mr- text-bold-700"
                style="text-transform: capitalize;">{{ Auth::user()->username }}</span>
              </span>
              <span class="avatar avatar-online">
                <img style="margin-top: 5%;" alt="adasia logo" src="/images/logoAdasia.png"
                width=" 85px" height="75px">
                <div class="profile-button dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div>
                  <button type="submit" id="tombolLogout" class="logout-button dropdown-item btn">
                    <i class="ft-power"></i> Logout
                  </button>
                  <a style="color: black; display: none">
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- //////////////////////////////// MENU ////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <br>
          <li class="nav-item"><a href="/"><i class="ft-home"></i><span
            class="menu-title">Home</span></a>
          </li>
          <li class="nav-item open"><a href="{{ route('dasboard.formMinat') }}"><i class="ft-message-square"></i><span
            class="menu-title">Form Minat</span></a>
          </li>
        </ul>
      </div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        @yield('page-title')
        <div class="content-body">
          @yield('content')
        </div>
      </div>
    </div>

    <footer class="footer fixed-bottom footer-fixed footer-dark navbar-border navbar-shadow">
      <p  class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span style="color: gold;"
        class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a
        class="text-bold-800 grey darken-2">Adasia Group </a>, All rights reserved. </span><span
        class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i style="color: gold;"
        class="ft-heart"></i></span></p>
      </footer>


      <!-- //////////////////////////////// MODAL LOGOUT ////////////////////////////////////////////-->
      <div class="modal-logout modal fade" id="modalLogout">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <form action="" method="POST" id="formActionLogout">
              @csrf
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-white"> <b> Peringatan !!!</b></h4>
                <button type="button" class="close text-black" data-dismiss="modal">&times;</button>
              </div><br><br>

              <div class="modal-body">
                <div class="container">
                  <i class="modal-delete-icon ft-power logout-icon"></i><br>
                  <p class="modal-delete-title"> <b>LogOut</b></p>
                  <p>Apakah anda yakin ingin LogOut?</p>
                  <p>Anda harus login kembali untuk masuk</p><br><br>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="submit" name="id" id="id" class="btn round">
                  <i class="fa fa-check"></i> Ok
                </button>
                <button type="button" class="btn round" data-dismiss="modal">
                  <i class="fa fa-times"></i> Close
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End Modals -->

      <script src="/modernAdmin/app-assets/vendors/js/vendors.min.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/charts/chart.min.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/charts/raphael-min.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/charts/morris.min.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
      <script src="/modernAdmin/app-assets/data/jvector/visitor-data.js"></script>
      <script src="/modernAdmin/app-assets/js/core/app-menu.js"></script>
      <script src="/modernAdmin/app-assets/js/core/app.js"></script>
      <script src="/modernAdmin/app-assets/js/scripts/customizer.js"></script>
      <script src="/modernAdmin/app-assets/js/scripts/pages/dashboard-sales.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
      <script src="/modernAdmin/app-assets/js/scripts/tables/datatables/datatable-basic.js"></script>
      <script src="/modernAdmin/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
      <script src="/modernAdmin/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>
      {{-- <script src="/ckeditor/ckeditor.js"></script>
      <script src="/ckeditor/adapters/jquery.js"></script> --}}

      @yield('script')

      @if(session('OK'))
        <script>
          toastr.success('{{ session("OK") }}', 'Success!');

        </script>
      @endif

      @if(session('ERR'))
        <script>
          toastr.error('{{ session("ERR") }}', 'Error!');

        </script>
      @endif

      <script>
        var d = new Date();
        var time = d.getHours();

        if (time <= 24 && time <= 12) {
          document.getElementById("greeting").innerHTML = "Selamat Pagi";
        }
        if (time >= 12 && time <= 16) {
          document.getElementById("greeting").innerHTML = "Selamat Siang";
        }
        if (time >= 16 && time <= 19) {
          document.getElementById("greeting").innerHTML = "Selamat Sore";
        }
        if (time >= 19 && time <= 24) {
          document.getElementById("greeting").innerHTML = "Selamat Malam";
        }

        $("#tombolLogout").on("click", function () {
          var id = $(this).val();
          $("#id").val(id);
          $("#formActionLogout").attr("action", "/logout");
          $("#modalLogout").modal();
        });

        $(document).ready(function () {
          var pathname = window.location.pathname;
          $(".nav-item a[href=\"" + pathname + "\"]").parent().addClass("active");
        })

      </script>

    </body>

    </html>
