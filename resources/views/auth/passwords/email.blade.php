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
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <body id="kt_body" class="app-blank">
    <script>
        var defaultThemeMode = "light";
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
     <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between  flex-column w-100 mw-450px">
                <div class="d-flex flex-stack py-2">
                    <div class="me-2">
                        <a href="{{ url('login') }}" class="btn btn-icon bg-light rounded-circle"> <i class="bi bi-arrow-left fs-2 text-gray-800"></i> </a>
                    </div>

                    <div class="m-0">
                        <span class="text-gray-400  fs-5 me-2" data-kt-translate="password-reset-head-desc">
                            Already a member ?
                        </span>

                        <a href="{{ url('register') }}" class="link-primary  fs-5" data-kt-translate="password-reset-head-link">
                            Sign In
                        </a>
                    </div>
                </div>


                    <div class="py-10">
                        <form method="POST" action="{{ route('password.email') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf  
                             
                            <div class="card-body">
                                <div class="text-start mb-10">
                                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">
                                        Forgot Password ?
                                    </h1>

                                    <div class="text-gray-400  fs-6" data-kt-translate="general-desc">
                                        Reclaim Access: Enter your email to reset your password.
                                    </div>
                                </div>

                            
                              
                                
                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                    @error('email')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
               
                           
                                <div class="d-flex flex-stack">
                                    <button id="kt_sign_in_submit" class="btn btn-lg btn-light-primary">
                                        <span class="indicator-label" data-kt-translate="sign-in-submit">
                                            {{ __('Send Password Reset Link') }}
                                        </span>

                                        <span class="indicator-progress">
                                            <span data-kt-translate="general-progress">Please wait...</span>
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>                             
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(../assets/media/images/login-bg.svg);"></div>
        </div>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>

</html>
