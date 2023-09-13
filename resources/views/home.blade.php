<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Task Sprint</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
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
    .menu-sub-dropdown {
      display: none;
      border-radius: 0.475rem;
      background-color: #000;
      color:#fff;
      box-shadow: var(--bs-menu-dropdown-box-shadow);
      z-index: 107;
  }
  .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: #fff;
    pointer-events: auto;
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    box-shadow: var(--bs-modal-box-shadow);
    outline: 0;
}
.btn-check:checked+.btn.btn-active-light-primary, .btn.btn-active-light-primary.active, .btn.btn-active-light-primary {
    color: var(--bs-primary);
    border-color: var(--bs-primary-light);
    background-color: var(--bs-primary-light)!important;
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
    <div id="loader-wrapper">
      <div id="loader"></div>
    </div>
    <!-- End Page Loading -->
    <div class="d-flex flex-column flex-root">
      <div class="page launcher sidebar-enabled d-flex flex-row flex-column-fluid me-lg-5" id="kt_page">
        <div class="d-flex flex-row-fluid">
          <div class="d-flex flex-column flex-row-fluid align-items-center ">       
            <div class="d-flex flex-column flex-column-fluid mb-4 mb-lg-10">
              <div class="d_flex p-2 mb-3">
                <!--begin::Logo-->
                <a href="{{ url('/') }}">
                 <img alt="Logo" src="assets/media/logos/logo.png" class="h-60px text-center nb-2" />
               </a>
               <!--end::Logo-->
               <h3 class="text-center text-white text-uppercase fs-2">Welcome to Task Sprint</h3>
               <!--begin::Sidebar toggle-->
               <div class="btn btn-icon btn-active-color-primary w-30px h-30px d-lg-none me-4" id="kt_sidebar_toggle">
                   <i class="bi bi-pencil fs-3"><span class="path1"></span><span class="path2"></span></i>   
               </div>
               <!--end::Sidebar toggle-->         
              
           </div>
              
              <div class="row g-7 w-xxl-850px">               
                <div class="col-md-5">
                  <div class="card border-0 h-lg-100" style="background: linear-gradient(45deg, #ffbc00, #f9666e);">
                    <div class="card-body d-flex flex-column flex-center">
                      

                      @if (Route::has('login'))
                        <div class="links">
                            @auth
                                <a href="{{ url('userdashboard') }}" class="btn btn-active-color-primary">Go To Dashboard</a>

                            @else
                                <a href="{{ route('login') }}" class="btn btn-active-color-primary">Login</a> <br/>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-active-color-primary">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                      <img class="mw-100 h-225px mx-auto mb-lg-n18" src="assets/media/illustrations/sigma-1/12.png" />
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="row g-lg-7">
                    <div class="col-sm-6">
                      <a href="{{ route('projects.index') }}" class="card border-0 min-h-200px mb-7" style="background-color: #f9666e;">
                        <div class="card-body d-flex flex-column flex-center text-center">
                          <img class="mw-100 h-100px mb-7 mx-auto" src="assets/media/illustrations/sigma-1/4.png" />
                          <h4 class="text-white text-uppercase">Start A Project</h4>
                        </div>
                      </a>
                    </div>
                    <div class="col-sm-6">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account" class="card border-0 min-h-200px mb-7" style="background-color: #35d29a;">
                        <div class="card-body d-flex flex-column flex-center text-center">
                          <img class="mw-100 h-100px mb-7 mx-auto" src="assets/media/illustrations/sigma-1/5.png" />
                          <h4 class="text-white text-uppercase">Create Account</h4>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="card border-0 min-h-200px" style="background-color: #d5d83d;">
                    <div class="card-body d-flex flex-center flex-wrap">
                      <img class="mw-100 h-200px me-4 mb-5 mb-lg-0" src="assets/media/illustrations/sigma-1/11.png" />
                      <div class="d-flex flex-column align-items-center align-items-md-start flex-grow-1" data-bs-theme="light">
                        <h3 class="text-gray-900 text-uppercase mb-5">Quick Guide</h3>
                        <div class="text-gray-800 mb-5 text-center text-md-start">
                          Explore our powerful<br />
                          documentation
                        </div>
                        <a href="#" class="btn btn-hover-rise text-gray-900 text-uppercase " style="background-color: #ebee51;">Learn More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column-auto flex-center">
              <ul class="menu order-1">
                <li class="menu-item"><a href="#" target="_blank" class="menu-link text-white opacity-50 opacity-100-hover px-3">About</a></li>
                <li class="menu-item"><a href="#" target="_blank" class="menu-link text-white opacity-50 opacity-100-hover px-3">Documentation</a></li>
                <li class="menu-item"><a href="#" target="_blank" class="menu-link text-white opacity-50 opacity-100-hover px-3">Support</a></li>
                <li class="menu-item"><a href="#" target="_blank" class="menu-link text-white opacity-50 opacity-100-hover px-3">Purchase</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div id="kt_sidebar" class="sidebar px-5 py-5 py-lg-8 px-lg-11" data-kt-drawer="true" data-kt-drawer-name="sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="375px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggle" style="">
          <div class="d-flex flex-stack mb-5 mb-lg-8" id="kt_sidebar_header">
            <h4 class="text-white">Task Activity</h4>
        
            <div class="ms-1">
                <div class="btn btn-icon btn-active-color-primary w-30px h-30px d-lg-none me-4" id="kt_sidebar_toggle">
                   <i class="bi bi-x-lg fs-3"><span class="path1"></span><span class="path2"></span></i>   
               </div>

            </div>
          </div>
        
          <div class="mb-5 mb-lg-8" id="kt_sidebar_body">
            <div class="hover-scroll-y me-n6 pe-6" id="kt_sidebar_body" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_sidebar_header, #kt_sidebar_footer" data-kt-scroll-wrappers="#kt_page, #kt_sidebar, #kt_sidebar_body" data-kt-scroll-offset="0" style="height: 220px;">
              <div class="timeline">
                <!-- Example Task: Created 2 new tasks in "Development" -->
                <div class="timeline-item">
                  <div class="timeline-line w-40px"></div>
        
                  <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                    <div class="symbol-label">
                      <i class="bi bi-pencil fs-2 text-white"></i>
                    </div>
                  </div>
        
                  <div class="timeline-content mb-10 mt-n1">
                    <div class="pe-3 mb-5">
                      <div class="mb-2 text-white">Created 2 new tasks in "Development"</div>
        
                      <div class="d-flex align-items-center mt-1 ">
                        <div class="text-white opacity-50 me-2 ">Added at 4:23 PM by</div>
        
                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" aria-label="John Doe" data-bs-original-title="John Doe">
                          <img src="assets/media/avatars/1.jpg" alt="img">
                        </div>
                      </div>
                    </div>
        
                    <div class="pb-5">
                      <div class="d-flex flex-stack border rounded px-7 py-3">
                        <a href="#" class="text-white text-hover-success w-375px">Improve website loading speed</a>
        
                        <a href="#" class="btn btn-sm btn-hover-rise text-white bg-opacity-10">View</a>
                      </div>
                    </div>
                  </div>
                </div>
        
                <!-- Example Task: 2 new entries in "Bug Fixes" -->
                <div class="timeline-item">
                  <div class="timeline-line w-40px"></div>
        
                  <div class="timeline-icon symbol symbol-circle symbol-40px">
                    <div class="symbol-label">
                      <i class="bi bi-bell fs-2 text-white"></i>
                    </div>
                  </div>
        
                  <div class="timeline-content mb-10 mt-n2">
                    <div class="pe-3">
                      <div class="text-white mb-2">2 new entries in "Bug Fixes"</div>
        
                      <div class="d-flex align-items-center mt-1 ">
                        <div class="text-white opacity-50 me-2 ">4:23 PM by</div>
        
                        <a href="#" class="text-success ">Jane Smith</a>
                      </div>
                    </div>
                  </div>
                </div>
        
                <!-- Example Task: Received 2 new project files -->
                <div class="timeline-item">
                  <div class="timeline-line w-40px"></div>
        
                  <div class="timeline-icon symbol symbol-circle symbol-40px">
                    <div class="symbol-label">
                      <i class="bi bi-basket fs-2 text-white"></i>
                    </div>
                  </div>
        
                  <div class="timeline-content mb-10 mt-n1">
                    <div class="mb-5 pe-3">
                      <a href="#" class="text-white text-hover-success mb-2">Received 2 new project files</a>
        
                      <div class="d-flex align-items-center mt-1 ">
                        <div class="text-white opacity-50 me-2 ">Sent at 10:30 PM by</div>
        
                        <a href="#" class="text-success ">You</a>
                      </div>
                    </div>
        
                    <div class="pb-5">
                      <div class="d-flex flex-stack border rounded p-4 mb-5">
                        <div class="d-flex align-items-center me-2">
                          <img alt="image" class="w-30px me-3" src="assets/media/svg/files/doc.svg">
        
                          <div class="d-flex flex-stack">
                            <div class="d-flex flex-column me-2">
                              <a href="#" class=" text-white text-hover-success">API Documentation</a>
        
                              <div class="text-white opacity-75">1.9mb</div>
                            </div>
                          </div>
                        </div>
        
                        <a href="#" class="btn btn-sm btn-hover-rise text-white bg-opacity-10">View</a>
                      </div>
        
                      <div class="d-flex flex-stack border rounded p-4">
                        <div class="d-flex align-items-center me-2">
                          <img alt="image" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
        
                          <div class="d-flex flex-stack">
                            <div class="d-flex flex-column me-2">
                              <a href="#" class=" text-white text-hover-success">Design Mockups</a>
        
                              <div class="text-gray-400">2.5mb</div>
                            </div>
                          </div>
                        </div>
        
                        <a href="#" class="btn btn-sm btn-hover-rise text-white bg-opacity-10">View</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <div class="text-center" id="kt_sidebar_footer">
            <a href="/activity.html" class="btn btn-hover-rise text-white bg-opacity-10 text-uppercase fs-7">View All Tasks</a>
          </div>
        </div>
        
      </div>
    </div>

    <div class="engage-toolbar d-flex position-fixed px-5 zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2"></div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
      <i class="bi bi-arrow-up"><span class="path1"></span><span class="path2"></span></i>
    </div>

   

    <div class="modal fade" id="kt_modal_create_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog mw-1000px">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Create Business Account</h2>

                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y m-5">
                <div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
                    <div class="stepper-nav py-5">
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Account Type
                            </h3>
                        </div>

                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Account Info
                            </h3>
                        </div>

                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Business Details
                            </h3>
                        </div>

                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Billing Details
                            </h3>
                        </div>

                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Completed
                            </h3>
                        </div>
                    </div>

                    <form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kt_create_account_form">
                        <div class="current" data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-15">
                                    <h2 class=" d-flex align-items-center text-dark">
                                        Choose Account Type

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Billing is issued based on your selected account typ">
                                            <i class="bi bi-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        </span>
                                    </h2>

                                    <div class="text-muted fw-semibold fs-6">
                                        If you need more info, please check out
                                        <a href="#" class="link-primary ">Help Page</a>.
                                    </div>
                                </div>

                                <div class="fv-row">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                                                <i class="bi bi-badge fs-3x me-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>

                                                <span class="d-block fw-semibold text-start">
                                                    <span class="text-dark  d-block fs-4 mb-2">
                                                        Personal Account
                                                    </span>
                                                    <span class="text-muted fw-semibold fs-6">If you need more info, please check it out</span>
                                                </span>
                                            </label>
                                        </div>

                                        <div class="col-lg-6">
                                            <input type="radio" class="btn-check" name="account_type" value="corporate" id="kt_create_account_form_account_type_corporate" />
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                                                <i class="bi bi-briefcase fs-3x me-5"><span class="path1"></span><span class="path2"></span></i>

                                                <span class="d-block fw-semibold text-start">
                                                    <span class="text-dark  d-block fs-4 mb-2">Corporate Account</span>
                                                    <span class="text-muted fw-semibold fs-6">Create corporate account to mane users</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-15">
                                    <h2 class=" text-dark">Account Info</h2>

                                    <div class="text-muted fw-semibold fs-6">
                                        If you need more info, please check out
                                        <a href="#" class="link-primary ">Help Page</a>.
                                    </div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="d-flex align-items-center form-label mb-3">
                                        Specify Team Size

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Provide your team size to help us setup your billing">
                                            <i class="bi bi-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        </span>
                                    </label>

                                    <div class="row mb-2" data-kt-buttons="true">
                                        <div class="col">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                                                <input type="radio" class="btn-check" name="account_team_size" value="1-1" />
                                                <span class=" fs-3">1-1</span>
                                            </label>
                                        </div>

                                        <div class="col">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 active">
                                                <input type="radio" class="btn-check" name="account_team_size" checked value="2-10" />
                                                <span class=" fs-3">2-10</span>
                                            </label>
                                        </div>

                                        <div class="col">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                                                <input type="radio" class="btn-check" name="account_team_size" value="10-50" />
                                                <span class=" fs-3">10-50</span>
                                            </label>
                                        </div>

                                        <div class="col">
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4">
                                                <input type="radio" class="btn-check" name="account_team_size" value="50+" />
                                                <span class=" fs-3">50+</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-text">
                                        Customers will see this shortened version of your statement descriptor
                                    </div>
                                </div>

                                <div class="mb-10 fv-row">
                                    <label class="form-label mb-3">Team Account Name</label>

                                    <input type="text" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="" />
                                </div>

                                <div class="mb-0 fv-row">
                                    <label class="d-flex align-items-center form-label mb-5">
                                        Select Account Plan

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Monthly billing will be based on your account plan">
                                            <i class="bi bi-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        </span>
                                    </label>

                                    <div class="mb-0">
                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <span class="d-flex align-items-center me-2">
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label">
                                                        <i class="bi bi-bank fs-1 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class=" text-gray-800 text-hover-primary fs-5">Company Account</span>
                                                    <span class="fs-6 fw-semibold text-muted">Use images to enhance your post flow</span>
                                                </span>
                                            </span>

                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="account_plan" value="1" />
                                            </span>
                                        </label>

                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                            <span class="d-flex align-items-center me-2">
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label">
                                                        <i class="bi bi-bar-chart-fill fs-1 text-gray-600"><span class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class=" text-gray-800 text-hover-primary fs-5">Developer Account</span>
                                                    <span class="fs-6 fw-semibold text-muted">Use images to your post time</span>
                                                </span>
                                            </span>

                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" checked name="account_plan" value="2" />
                                            </span>
                                        </label>

                                        <label class="d-flex flex-stack mb-0 cursor-pointer">
                                            <span class="d-flex align-items-center me-2">
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label">
                                                        <i class="bi bi-pie-chart-fill fs-1 text-gray-600"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                    </span>
                                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class=" text-gray-800 text-hover-primary fs-5">Testing Account</span>
                                                    <span class="fs-6 fw-semibold text-muted">Use images to enhance time travel rivers</span>
                                                </span>
                                            </span>

                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="account_plan" value="3" />
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-12">
                                    <h2 class=" text-dark">Business Details</h2>

                                    <div class="text-muted fw-semibold fs-6">
                                        If you need more info, please check out
                                        <a href="#" class="link-primary ">Help Page</a>.
                                    </div>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="form-label required">Business Name</label>

                                    <input name="business_name" class="form-control form-control-lg form-control-solid" value="Keenthemes Inc." />
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="d-flex align-items-center form-label">
                                        <span class="required">Shortened Descriptor</span>
                                            <i class="bi bi-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        </span>
                                    </label>

                                    <input name="business_descriptor" class="form-control form-control-lg form-control-solid" value="KEENTHEMES" />

                                    <div class="form-text">
                                        Customers will see this shortened version of your statement descriptor
                                    </div>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="form-label required">Corporation Type</label>

                                    <select name="business_type" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                                        <option></option>
                                        <option value="1">S Corporation</option>
                                        <option value="1">C Corporation</option>
                                        <option value="2">Sole Proprietorship</option>
                                        <option value="3">Non-profit</option>
                                        <option value="4">Limited Liability</option>
                                        <option value="5">General Partnership</option>
                                    </select>
                                </div>

                                <div class="fv-row mb-10">
                                    <label class="form-label">Business Description</label>

                                    <textarea name="business_description" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                </div>

                                <div class="fv-row mb-0">
                                    <label class="fs-6 fw-semibold form-label required">Contact Email</label>

                                    <input name="business_email" class="form-control form-control-lg form-control-solid" value="corp@support.com" />
                                </div>
                            </div>
                        </div>

                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-10 pb-lg-15">
                                    <h2 class=" text-dark">Billing Details</h2>

                                    <div class="text-muted fw-semibold fs-6">
                                        If you need more info, please check out
                                        <a href="#" class="text-primary ">Help Page</a>.
                                    </div>
                                </div>

                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">Name On Card</span>

                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                            <i class="bi bi-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                        </span>
                                    </label>

                                    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                </div>

                                <div class="d-flex flex-column mb-7 fv-row">
                                    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>

                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />

                                        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                            <img src="assets/media/svg/card-logos/visa.svg" alt="image" class="h-25px" />
                                            <img src="assets/media/svg/card-logos/mastercard.svg" alt="image" class="h-25px" />
                                            <img src="assets/media/svg/card-logos/american-express.svg" alt="image" class="h-25px" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-10">
                                    <div class="col-md-8 fv-row">
                                        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>

                                        <div class="row fv-row">
                                            <div class="col-6">
                                                <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                    <option></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>

                                            <div class="col-6">
                                                <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                    <option></option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                    <option value="2031">2031</option>
                                                    <option value="2032">2032</option>
                                                    <option value="2033">2033</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 fv-row">
                                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                            <span class="required">CVV</span>

                                            <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                                <i class="bi bi-information-5 text-gray-500 fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                            </span>
                                        </label>

                                        <div class="position-relative">
                                            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />

                                            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                <i class="bi bi-credit-cart fs-2hx"><span class="path1"></span><span class="path2"></span></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack">
                                    <div class="me-5">
                                        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                    </div>

                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                        <span class="form-check-label fw-semibold text-muted">
                                            Save Card
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <div class="pb-8 pb-lg-10">
                                    <h2 class=" text-dark">Your Are Done!</h2>

                                    <div class="text-muted fw-semibold fs-6">
                                        If you need more info, please
                                        <a href="?page=" class="link-primary ">
                                            Sign In
                                        </a>
                                        .
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <div class="fs-6 text-gray-600 mb-5">
                                        Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great & amazing audience.
                                    </div>

                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                        <i class="bi bi-information fs-2tx text-warning me-4"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>

                                        <div class="d-flex flex-stack flex-grow-1">
                                            <div class="fw-semibold">
                                                <h4 class="text-gray-900 ">We need your attention!</h4>

                                                <div class="fs-6 text-gray-700">To start using great tools, please, <a href="?page=utilities/wizards/vertical" class="">Create Team Platform</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-stack pt-15">
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                    <i class="bi bi-arrow-left fs-4 me-1"><span class="path1"></span><span class="path2"></span></i> Back
                                </button>
                            </div>

                            <div>
                                <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                        <i class="bi bi-arrow-right fs-3 ms-2 me-0"><span class="path1"></span><span class="path2"></span></i>
                                    </span>
                                    <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                </button>

                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <i class="bi bi-arrow-right fs-4 ms-1 me-0"><span class="path1"></span><span class="path2"></span></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/modals/create-account.js"></script>
    <script src="assets/js/custom/modals/create-app.js"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>

    <!-- Ensure you include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript for Preloader -->
    <script>
      $(document).ready(function() {
        setTimeout(function() {
          $('body').addClass('loaded');
        }, 1000); 
      });
      
    </script>


  </body>
</html>
