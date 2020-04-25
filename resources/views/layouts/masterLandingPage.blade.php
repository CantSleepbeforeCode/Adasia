<!DOCTYPE html>
<html>

<head>

  <!-- Metas -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>@yield('title')</title>

  <meta name="keywords" content="Adasia" />
  <meta name="description" content="Adasia - Indonesia Culture Music Video Application">
  <meta name="author" content="Linyar Borneo">

  <!-- Icon -->

  <link rel="shortcut icon" type="image/x-icon" href="/images/logoAdasia.ico">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link href="/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

  <!-- Style CSS -->
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/porto/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/porto/vendor/animate/animate.min.css">
  <link rel="stylesheet" href="/porto/vendor/simple-line-icons/css/simple-line-icons.min.css">
  <link rel="stylesheet" href="/porto/vendor/owl.carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/porto/vendor/owl.carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="/porto/vendor/magnific-popup/magnific-popup.min.css">
  <link rel="stylesheet" href="/porto/css/theme.css">
  <link rel="stylesheet" href="/porto/css/theme-elements.css">
  <link rel="stylesheet" href="/porto/css/theme-blog.css">
  <link rel="stylesheet" href="/porto/css/theme-shop.css">
  <link rel="stylesheet" href="/porto/vendor/rs-plugin/css/settings.css">
  <link rel="stylesheet" href="/porto/vendor/rs-plugin/css/layers.css">
  <link rel="stylesheet" href="/porto/vendor/rs-plugin/css/navigation.css">
  <link rel="stylesheet" href="/porto/css/demos/demo-app-landing.css">
  <link rel="stylesheet" href="/porto/css/skins/skin-app-landing.css">
  <link rel="stylesheet" href="/porto/css/custom.css">

  {{-- Page Style --}}
  @yield('style')

  <style media="screen">
  .header{
    margin-bottom: -30px;
  }

  html .scroll-to-top:hover,
  html .scroll-to-top:focus{
    color: #e6c300 !important;
  }

  @media screen and (max-width: 667px) {
    .header{
      margin-bottom: -70px;
    }

  </style>

  {{-- Additional script --}}
  <script src="/porto/vendor/modernizr/modernizr.min.js"></script>

</head>

<body>

  <body data-spy="scroll" data-target=".header-nav-main nav" data-offset="65">
    <header id="header" class="header header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
      <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container" style="border-bottom: #e6c300 2px solid !important">
          <div class="header-row">
            <div class="header-column">
              <div class="header-row">
                <div class="header-logo">
                  <a href="#">
                    <img alt="Adasia" width="55" height="55" src="/images/logoAdasia.png">
                  </a>
                </div>
              </div>
            </div>
            <div class="header-column justify-content-end">
              <div class="header-row">
                <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                  <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                    <nav class="collapse">
                      <ul class="nav nav-pills" id="mainNav">
                        <li>
                          <a class="nav-link active" href="#deskripsi" data-hash>
                            Deskripsi
                          </a>
                        </li>
                        <li>
                          <a class="nav-link" href="#cara-kerja" data-hash data-hash-offset="62">
                            Cara Kerja
                          </a>
                        </li>
                        <li>
                          <a class="nav-link" href="#fitur" data-hash data-hash-offset="62">
                            Fitur
                          </a>
                        </li>
                        <li>
                          <a class="nav-link" href="#pre-register" data-hash data-hash-offset="62">
                            Pre-Register
                          </a>
                        </li>
                        <li>
                          <a class="nav-link" href="#tim" data-hash data-hash-offset="62">
                            Tim
                          </a>
                        </li>
                        <li>
                          <a class="nav-link" href="#faq" data-hash data-hash-offset="62">
                            FAQ'S
                          </a>
                        </li>
                        <li>
                          <a class="nav-link" href="#download" data-hash>
                            DOWNLOAD
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                  <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                    <i class="fas fa-bars"></i>
                  </button>
                </div>
                <div class="order-1 order-lg-2">
                  <div class="d-inline-flex">
                    <ul class="header-social-icons social-icons custom-social-icons-style-1 _white d-none d-sm-block">
                      <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
                      <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
                      <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div role="main" class="main">

      @yield('content')

    </div>

    <footer id="footer" class="footer-top-border bg-color-light-scale-1">
      <div class="footer-copyright bg-color-light-scale-1">
        <div class="container py-2">
          <div class="row py-4">
            <div class="col d-flex align-items-center justify-content-center">
              <p><strong>ADASIA GROUP</strong> - © Copyright 2020. All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- Script -->
  <script src="/porto/vendor/jquery/jquery.min.js"></script>
  <script src="/porto/vendor/jquery.appear/jquery.appear.min.js"></script>
  <script src="/porto/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/porto/vendor/jquery.cookie/jquery.cookie.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="/porto/vendor/common/common.min.js"></script>
  <script src="/porto/vendor/jquery.validation/jquery.validate.min.js"></script>
  <script src="/porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="/porto/vendor/jquery.gmap/jquery.gmap.min.js"></script>
  <script src="/porto/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
  <script src="/porto/vendor/isotope/jquery.isotope.min.js"></script>
  <script src="/porto/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/porto/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="/porto/vendor/vide/jquery.vide.min.js"></script>
  <script src="/porto/vendor/vivus/vivus.min.js"></script>
  <script src="/porto/js/theme.js"></script>
  <script src="/porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="/porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <script src="/porto/js/views/view.contact.js"></script>
  <script src="/porto/js/custom.js"></script>
  <script src="/porto/js/theme.init.js"></script>
  @yield('script')

</body>

</html>
