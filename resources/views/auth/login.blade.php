<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Task Sprint</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <style>
    .page-bg {
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url('assets/media/images/page-bg.jpg');
    }
   .card {
      z-index: 999;
      border-radius: 10px;
    }
    .page{
      z-index: 999;
    }
    .menu{
      z-index: 999;
    }
    .sidebar {
      z-index: 999;
    }
    .flex-root {
      width: 100%;
      position: absolute;
    }

    .circles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .circles li {
      position: absolute;
      display: block;
      list-style: none;
      width: 20px;
      height: 20px;
      background: rgba(255, 255, 255, 0.2);
      animation: animate 25s linear infinite;
      bottom: -150px;
    }

    .circles li:nth-child(1) {
      left: 25%;
      width: 80px;
      height: 80px;
      animation-delay: 0s;
    }

    .circles li:nth-child(2) {
      left: 10%;
      width: 20px;
      height: 20px;
      animation-delay: 2s;
      animation-duration: 12s;
    }

    .circles li:nth-child(3) {
      left: 70%;
      width: 20px;
      height: 20px;
      animation-delay: 4s;
    }

    .circles li:nth-child(4) {
      left: 40%;
      width: 60px;
      height: 60px;
      animation-delay: 0s;
      animation-duration: 18s;
    }

    .circles li:nth-child(5) {
      left: 65%;
      width: 20px;
      height: 20px;
      animation-delay: 0s;
    }

    .circles li:nth-child(6) {
      left: 75%;
      width: 110px;
      height: 110px;
      animation-delay: 3s;
    }

    .circles li:nth-child(7) {
      left: 35%;
      width: 150px;
      height: 150px;
      animation-delay: 7s;
    }

    .circles li:nth-child(8) {
      left: 50%;
      width: 25px;
      height: 25px;
      animation-delay: 15s;
      animation-duration: 45s;
    }

    .circles li:nth-child(9) {
      left: 20%;
      width: 15px;
      height: 15px;
      animation-delay: 2s;
      animation-duration: 35s;
    }

    .circles li:nth-child(10) {
      left: 85%;
      width: 150px;
      height: 150px;
      animation-delay: 0s;
      animation-duration: 11s;
    }

    @keyframes animate {
      0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
      }

      100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
      }
    }
    .d_flex{
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    #kt_page{
        z-index: 9999;
    }

  </style>

  <body id="kt_body" class="page-bg">
    <script>
      var defaultThemeMode = "dark";
      var themeMode;

      if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
          themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
          if (localStorage.getItem("data-bs-theme") !== null) {
            themeMode = localStorage.getItem("data-bs-theme");
          } else {
            themeMode = defaultThemeMode;
          }
        }

        if (themeMode === "system") {
          themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
      }
    </script>
    <!-- Start Page Loading -->

    <!-- End Page Loading -->
    <div class="d-flex flex-column flex-root">
      <div class="d-flex flex-row flex-column-fluid me-lg-5" id="kt_page">
        <div class="flex-row-fluid">

              <div class="row g-10"> 
                <div class="d-flex flex-column ">
                    <div class="d-flex flex-center flex-column flex-column-fluid p-5 pb-lg-20">                       
                    <div class="d_flex p-2">
                                
                        <a href="{{ url('/') }}">
                            <img alt="Logo" src="assets/media/logos/logo.png" class="h-60px text-center nb-2 me-4" />
                        </a>
                        
                        <h3 class="text-center text-white text-uppercase fs-2">Welcome to Task Sprint</h3>
                        
                                
                            
                        </div>
                        <div class="w-lg-500px bg-body rounded shadow-sm p-5 p-lg-10 mx-auto">
                            <form method="POST" action="{{ route('login') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
                                @csrf   
                                <div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <label class="form-label fs-6  text-dark">Email</label>
                                    <input id="email" type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <div class="d-flex flex-stack mb-2">
                                        <label class="form-label  text-dark fs-6 mb-0">Password</label>
                                        @if (Route::has('password.request'))
                                            <a class="link-primary fs-6" href="{{ route('password.request') }}">
                                                {{ __('Forgot Password ?') }}
                                            </a>
                                        @endif
                                    </div>

                                    <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                   
                                    @error('password')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                        <span class="indicator-label">
                                            {{ __('Login') }}
                                        </span>
                                    </button>

                                    <div class="text-center text-muted text-uppercase mb-2">or</div>

                                    <div class="">
                                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                                            Continue with Google
                                        </a>
                                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/github.svg" class="theme-light-show h-20px me-3" />                                           
                                            Continue with Github
                                        </a>


                                    </div>


                                    
                                    <div class="text-center text-muted text-uppercase mb-2 mt-4">or</div>

                                    <div class="text-center mb-10 mt-2">
                                        
                                    <div class="text-gray-400 fs-4">
                                            New Here?

                                            <a href="#" class="link-primary ">
                                                Create an Account
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="d-flex flex-center flex-column-auto mb-2 mt-0">
                        <div class="d-flex align-items-center  fs-6">
                            <a href="#" class="text-muted text-hover-primary px-2">About</a>

                            <a href="#" class="text-muted text-hover-primary px-2">Support</a>

                            <a href="#" class="text-muted text-hover-primary px-2">
                                Purchase
                            </a>
                        </div>
                    </div>
                </div>              
              
              </div>

        </div>

      </div>
    </div>

    <div class="engage-toolbar d-flex position-fixed px-5 zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2"></div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="bi bi-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>


    


    <div class="area">
      <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <script>
      var hostUrl = "assets/";
    </script>


  </body>
</html>
