<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Task Sprint</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../assets/media/logos/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />

    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
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
                          <a href="{{ url('/') }}">
                              <img alt="Logo" src="assets/media/logos/logo.png" class="h-60px text-center nb-2 me-4" />
                          </a>
                        </div>

                        <div class="m-0">
                          <h3 class="text-center text-uppercase fs-2">Welcome to Task Sprint</h3>

                        </div>
                    </div>

                    <div class="py-10">
                        <form method="POST" action="{{ route('register') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf  
                             
                            <div class="card-body">
                                <div class="text-start mb-10">
                                    <h1 class="text-dark mb-3 fs-3x" data-kt-translate="sign-in-title">
                                        Sign Up
                                    </h1>

                                    <div class="text-gray-400  fs-6" data-kt-translate="general-desc">
                                        Join the Sprint: Sign Up and Get Started.
                                    </div>
                                </div>

                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input id="name" type="text" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                                    @error('name')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                              
                                
                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input id="email" type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                    @error('email')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                    @error('password')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>

                                
                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input id="password-confirm" type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                                    @error('password_confirmation')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                           
                                <div class="d-flex flex-stack">
                                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                        <span class="indicator-label" data-kt-translate="sign-in-submit">
                                            {{ __('Register') }}
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

            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(assets/media/images/login-bg.svg);"></div>
        </div>
    </div>

    <script>
        var hostUrl = "assets/";
    </script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>

</html>
