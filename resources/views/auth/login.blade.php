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
                          <h3 class="text-center fs-bold text-uppercase fs-2">Welcome to Task Sprint</h3>

                        </div>
                    </div>

                    <div class="py-10">
                        <form method="POST" action="{{ route('login') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf   
                            <div class="card-body">
                                <div class="text-start mb-10">
                                    <h1 class="text-dark mb-3 fs-3x">
                                        Sign In
                                    </h1>

                                    <div class="text-gray-400  fs-6">
                                        Working with experienced teams makes work easier & gets you closer to your goals.
                                    </div>
                                </div>

                                <div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                   
                                    <input id="email" type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

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

                                    <div class="mb-1">
                                        <div class="position-relative mb-3">
                                            <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            <span id="togglePassword" class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                                                <i class="bi bi-eye-slash fs-2"></i>
                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                    </div>


                                   
                                    @error('password')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                           
                                <div class="d-flex flex-stack">
                                    <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                        <span class="indicator-label" data-kt-translate="sign-in-submit">
                                          {{ __('Login') }}
                                        </span>

                                        <span class="indicator-progress">
                                            <span data-kt-translate="general-progress">Please wait...</span>
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <div class="d-flex align-items-center">
                                        <div class="text-gray-400  fs-6 me-3 me-md-6" data-kt-translate="general-or">Or</div>

                                        <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="p-4" />
                                        </a>

                                        <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/facebook-3.svg" class="p-4" />
                                        </a>

                                        <a href="#" class="symbol symbol-circle symbol-45px w-45px bg-light">
                                            <img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show p-4" />
                                            <img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show p-4" />
                                        </a>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="mt-4">
                                  <span class="text-gray-400  fs-5 me-2" data-kt-translate="sign-in-head-desc">
                                      Not a Member yet?
                                  </span>
                                  @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="link-primary  fs-5" data-kt-translate="sign-in-head-link">
                                        Sign Up
                                    </a>
                                  @endif
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
    <script src="assets/js/signin.js"></script>
    <script>
        $(document).ready(function() {
            $('#togglePassword').on('click', function() {
                var passwordInput = $('#password');
                var icon = $(this).find('i');

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    icon.removeClass('bi-eye-slash');
                    icon.addClass('bi-eye');
                } else {
                    passwordInput.attr('type', 'password');
                    icon.removeClass('bi-eye');
                    icon.addClass('bi-eye-slash');
                }
            });
        });



    </script>
</body>
</html>
