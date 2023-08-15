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
                        
                        <a href="{{ route('login') }}" class="btn btn-icon bg-light rounded-circle"> <i class="bi bi-arrow-left fs-2 text-gray-800"></i> </a>
                    </div>

                    <div class="m-0">
                        <span class="text-gray-600  fs-5 me-2">
                            Already a member ?
                        </span>

                        <a href="{{ route('login') }}" class="link-primary  fs-5">
                            Sign In
                        </a>
                    </div>
                </div>

                    <div class="py-10">
                        <form method="POST" action="{{ route('register') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf  
                             
                            <div class="card-body">
                                <div class="text-start mb-10">
                                    <h1 class="text-dark text-dark-fade-in mb-3">
                                        Create an Account
                                    </h1>

                                    <div class="text-gray-600  fs-6">
                                        Join the Sprint: Sign Up and Get Started.
                                    </div>
                                </div>

                                <div class="row fv-row mb-5 fv-plugins-icon-container">
                                    <div class="col-xl-6">
                                        <input id="name" type="text" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="First Name" required autocomplete="name" autofocus>
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>

                                    <div class="col-xl-6">
                                        <input id="lastname" type="text" class="form-control form-control-lg form-control-solid @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name" required autocomplete="name" autofocus>
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                    </div>
                                </div>
                                
                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input id="email" type="email" class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                    @error('email')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <!-- <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

                                    @error('password')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div> -->

                                <div class="mb-1">
                                
                                    <div class="position-relative mb-3">
                                        <input id="password" type="password" class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                        <span id="togglePassword" class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                </div>


                                
                                <div class="fv-row mb-5 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <input id="password-confirm" type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">

                                    @error('password_confirmation')
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback" role="alert">{{ $message }}</div>
                                    @enderror
                                </div>
                           
                                <div class="fv-row mb-10 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="toc" value="1">
                                        <span class="form-check-label fw-semibold text-gray-700 fs-6">
                                            I Agree <a href="#" class="ms-1 link-primary">Terms and conditions</a>.
                                        </span>
                                    </label>
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                                
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
