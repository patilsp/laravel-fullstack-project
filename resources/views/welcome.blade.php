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
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
  </head>

  <style>
    body{
      background: transparent linear-gradient(90deg, #14EB8F 0%, #00B78A 100%) 0% 0% no-repeat padding-box;
    }
 /* .page-bg {
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;
        background-image: url('assets/media/images/bg.jpg');
    } */
  </style>
<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat bg-primary">
  <div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="mt-4">
        <div class="d-flex flex-column flex-center text-center p-5">
            <div class="card card-flush w-md-650px py-2 bg-white">
                <div class="card-body py-10 py-lg-20">
                    <div class="mb-7">
                        <a href="{{ route('home') }}" class="">
                            <img alt="Logo" src="assets/media/logos/logo.png" class="h-40px" />
                        </a>
                    </div>

                    <h1 class="fw-bolder text-gray-900 mb-4">
                        Welcome to Task Sprint
                    </h1>

                    <div class="fw-semibold fs-6 text-gray-500 mb-4">
                     

                      Welcome to Task Sprint, fueled by cutting-edge AI technology! <br/> Ready to supercharge your productivity? <br/> Let's get started! 🚀
                     </div>

                    <div class="mb-4">
                        <img src="assets/media/images/work-1.png" class="mw-100 mh-300px theme-light-show" alt="welcome" />
                        
                    </div>

                    <div class="mb-0">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-label-primary">Go To Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
    <script>
      var hostUrl = "assets/";
    </script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>

  </body>
</html>
