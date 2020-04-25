<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <link rel="shortcut icon" type="image/x-icon" href="/images/logoAdasia.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="author" content="101Creative.id">
  <title>Adasia - Login</title>

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/pages/login-register.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="/modernAdmin/assets/css/style.css">
  <!-- END Custom CSS-->
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/vendors/css/extensions/toastr.css">
  <link rel="stylesheet" type="text/css" href="/modernAdmin/app-assets/css/plugins/extensions/toastr.css">

  <style media="screen">
  .blank-page .content-wrapper .flexbox-container{
    background-color: #ccad00;
  }

  .logo img{
    width: 200px;
    height: 200px;
  }

  @media screen and (max-width: 680px) {
    .logo img{
      width: 130px;
      height: 130px;
    }

  }


</style>

</head>
<body class="vertical-layout vertical-menu-modern 1-column   menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1 logo">
                      <a href="/"><img src="/images/logoAdasia.png" class="img-fluid" alt="branding logo"></a>
                    </div>
                    </div>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <fieldset class="form-group position-relative has-icon-left mb-1">
                        <form class="form-horizontal form-simple" method="POST" action="/doLogin">
                          @csrf
                          <input type="text" name="username" class="form-control form-control-lg input-lg" id="user-name" placeholder="Enter your Username..." autofocus>
                          <div class="form-control-position">
                            <i class="ft-user"></i>
                          </div>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Enter your Password..." >
                          <div class="form-control-position">
                            <i class="ft-lock"></i>
                          </div>
                        </fieldset>
                        <div class="form-group row">
                          <div class="col-md-6 col-12 text-center text-md-left">
                            <fieldset>
                              <input type="checkbox" id="remember-me" checked>
                              <label for="remember-me"> Remember Me</label>
                            </fieldset>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-block" style="background: #ccad00 !important; color: darken;"><i class="ft-unlock"></i> Login</button>
                      </form>
                    </div>
                  </div>
                  <div class="card-footer">
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="/modernAdmin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="/modernAdmin/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="/modernAdmin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
    type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="/modernAdmin/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="/modernAdmin/app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="/modernAdmin/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="/modernAdmin/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="/modernAdmin/app-assets/js/scripts/extensions/toastr.js" type="text/javascript"></script>

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


  </body>

  </html>
