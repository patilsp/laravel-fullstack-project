
<!DOCTYPE html>
    <html lang="en">

   @include('layouts.head')
   @yield('style')

  <body
    id="kt_app_body"
    data-kt-app-header-fixed="true"
    data-kt-app-header-fixed-mobile="true"
    data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true"
    data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true"
    data-kt-app-sidebar-stacked="true"
    data-kt-app-sidebar-secondary-enabled="true"
    data-kt-app-toolbar-enabled="true"
    class="app-default"
    data-kt-app-sidebar-secondary-collapse="on"
  >
    <!-- Start Page Loading -->
    <!-- <div id="loader-wrapper">
      <div id="loader"></div>
    </div> -->
    <!-- End Page Loading -->


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

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
       

      @include('layouts.navbar')



        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
          

        @include('layouts.sidebar')



          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
              <div id="kt_app_toolbar" class="app-toolbar mb-4 mb-lg-0">
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap"></div>
              </div>

              <div id="kt_app_content" class="app-content flex-column-fluid">
                  @yield('content')
              </div>
            </div>

            @include('layouts.footer')
          </div>
        </div>
      </div>


      <button id="kt_drawer_chat_toggle" class="btn btn-dark app-layout-builder-toggle px-2 py-2" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
        <i class="bi bi-chat fs-4 p-1"></i>
      </button>


      <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="bi bi-arrow-up"></i>
      </div>
   
      @include('layouts.footer')
