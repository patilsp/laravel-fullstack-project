@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
                  <div class="row mt-4">
                    <div class="col-xl-4 mb-4">
                      <div class="card card-flush h-xl-100">
                        <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px bg-primary" data-bs-theme="light">
                          <h3 class="card-title align-items-start flex-column text-white pt-15">
                            <span class="fs-2x mb-3">My Tasks</span>

                            <div class="fs-4 text-white">
                              <span class="opacity-75">You have</span>

                              <span class="position-relative d-inline-block">
                                <a href="projects.html" class="link-white opacity-75-hover d-block mb-1">4 tasks</a>

                                <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                              </span>

                              <span class="opacity-75">to complete</span>
                            </div>
                          </h3>

                          <div class="card-toolbar pt-5">
                            <button
                              class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                              data-kt-menu-trigger="click"
                              data-kt-menu-placement="bottom-end"
                              data-kt-menu-overflow="true"
                            >
                              <i class="bi bi-three-dots-vertical fs-1x"></i>
                            </button>

                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px" data-kt-menu="true">
                              <div class="menu-item px-3">
                                <div class="menu-content  text-dark px-3 py-4">Quick Actions</div>
                              </div>

                              <div class="separator mb-3 opacity-75"></div>

                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                  New Ticket
                                </a>
                              </div>

                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                  New Customer
                                </a>
                              </div>

                              <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                  <span class="menu-title">New Group</span>
                                  <span class="menu-arrow"></span>
                                </a>

                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                  <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                      Admin Group
                                    </a>
                                  </div>

                                  <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                      Staff Group
                                    </a>
                                  </div>

                                  <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                      Member Group
                                    </a>
                                  </div>
                                </div>
                              </div>

                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                  New Contact
                                </a>
                              </div>

                              <div class="separator mt-3 opacity-75"></div>

                              <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                  <a class="btn btn-primary btn-sm px-4" href="#">
                                    Generate Reports
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="card-body mt-n20">
                          <div class="mt-n20 position-relative">
                            <div class="row">
                              <div class="col-6 mb-2">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                  <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                      <i class="bi bi-book fs-1 text-primary"></i>
                                    </span>
                                  </div>

                                  <div class="m-0">
                                    <span class="text-gray-700 er d-block fs-2qx lh-1 ls-n1 mb-1">37</span>

                                    <span class="text-gray-500  ">Courses</span>
                                  </div>
                                </div>
                              </div>

                              <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                  <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                      <i class="bi bi-bank fs-1 text-primary"></i>
                                    </span>
                                  </div>

                                  <div class="m-0">
                                    <span class="text-gray-700 er d-block fs-2qx lh-1 ls-n1 mb-1">6</span>

                                    <span class="text-gray-500  ">Certificates</span>
                                  </div>
                                </div>
                              </div>

                              <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                  <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                      <i class="bi bi-award fs-1 text-primary"></i>
                                    </span>
                                  </div>

                                  <div class="m-0">
                                    <span class="text-gray-700 er d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>

                                    <span class="text-gray-500  ">Avg. Score</span>
                                  </div>
                                </div>
                              </div>

                              <div class="col-6">
                                <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                  <div class="symbol symbol-30px me-5 mb-8">
                                    <span class="symbol-label">
                                      <i class="bi bi-clock fs-1 text-primary"></i>
                                    </span>
                                  </div>

                                  <div class="m-0">
                                    <span class="text-gray-700 er d-block fs-2qx lh-1 ls-n1 mb-1">822</span>

                                    <span class="text-gray-500  ">Hours Learned</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-8 mb-4 mb-4">
                      <div class="row mb-4">
                        <div class="col-xl-6 mb-2 mb-4">
                          <div id="kt_sliders_widget_1_slider" class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="card-header pt-5">
                              <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label text-gray-600">Today’s Tasks</span>
                                <span class="text-gray-400 mt-1 fs-7">4 tasks, 2 hours 30 minutes</span>
                              </h4>

                              <div class="card-toolbar">
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                  <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="0" class="ms-1"></li>
                                  <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="1" class="ms-1 active" aria-current="true"></li>
                                  <li data-bs-target="#kt_sliders_widget_1_slider" data-bs-slide-to="2" class="ms-1"></li>
                                </ol>
                              </div>
                            </div>

                            <div class="card-body py-6">
                              <div class="carousel-inner">
                                <div class="carousel-item show">
                                  <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0 me-2">
                                      <img src="assets/media/images/task-1.png" class="w-80px" alt="task" />
                                    </div>

                                    <div class="p-1">
                                      <h4 class="text-gray-600 mb-3">UI/UX Development </h4>

                                      <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2"> <i class="bi bi-clock text-gray-600 me-1"></i> Due: Tomorrow </span>

                                          <span class="d-flex align-items-center text-gray-400 fs-7">   <i class="bi bi-person text-gray-600 me-1"></i> To: John Doe </span>
                                        </div>

                                        <div class="d-flex flex-column flex-shrink-0">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">   <i class="bi bi-clock text-gray-600 me-1"></i> Estimated: 2 hr </span>

                                          <span class="d-flex align-items-center text-gray-400 fs-7">   <i class="bi bi-star-fill text-warning me-1"></i> Priority: High </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Mark As Done</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit Task</a>
                                  </div>
                                </div>

                                <div class="carousel-item active">
                                  <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0 me-2">
                                      <img src="assets/media/images/task-2.png" class="w-80px" alt="task" />
                                    </div>

                                    <div class="p-1">
                                      <h4 class="text-gray-600 mb-3">UI Development </h4>

                                      <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2"> <i class="bi bi-clock text-gray-600 me-1"></i> Due: Tomorrow </span>

                                          <span class="d-flex align-items-center text-gray-400 fs-7">   <i class="bi bi-person text-gray-600 me-1"></i> To: John Doe </span>
                                        </div>

                                        <div class="d-flex flex-column flex-shrink-0">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">   <i class="bi bi-clock text-gray-600 me-1"></i> Estimated: 2 hr </span>

                                          <span class="d-flex align-items-center text-gray-400 fs-7">   <i class="bi bi-star-fill text-warning me-1"></i> Priority: High </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Mark As Done</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit Task</a>
                                  </div>
                                </div>

                                <div class="carousel-item">
                                  <div class="d-flex align-items-center mb-4">
                                    <div class="flex-shrink-0 me-2">
                                      <img src="assets/media/images/task-3.png" class="w-80px" alt="task" />
                                    </div>

                                    <div class="p-1">
                                      <h4 class="text-gray-600 mb-3">UI Testing </h4>

                                      <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2"> <i class="bi bi-clock text-gray-600 me-1"></i> Due: Today </span>

                                          <span class="d-flex align-items-center text-gray-400 fs-7">   <i class="bi bi-person text-gray-600 me-1"></i> To: John Doe </span>
                                        </div>

                                        <div class="d-flex flex-column flex-shrink-0">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">   <i class="bi bi-clock text-gray-600 me-1"></i> Estimated: 1 hr </span>

                                          <span class="d-flex align-items-center text-gray-400 fs-7">   <i class="bi bi-star-fill text-warning me-1"></i> Priority: High </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">Mark As Done</a>

                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Edit Task</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-6 mb-2 mb-4">
                          <div
                            id="kt_sliders_widget_2_slider"
                            class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                            data-bs-ride="carousel"
                            data-bs-interval="5500"
                          >
                            <div class="card-header pt-5">
                              <h4 class="card-title d-flex align-items-start flex-column">
                                <span class="card-label text-gray-600">Software Development Sprint</span>
                                <span class="text-gray-400 mt-1 fs-7">24 events on all activities</span>
                              </h4>
                        
                              <div class="card-toolbar">
                                <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                  <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="0" class="ms-1"></li>
                                  <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="1" class="ms-1"></li>
                                  <li data-bs-target="#kt_sliders_widget_2_slider" data-bs-slide-to="2" class="ms-1 active" aria-current="true"></li>
                                </ol>
                              </div>
                            </div>
                        
                            <div class="card-body py-6">
                              <div class="carousel-inner">
                                <!-- Sprint 1 Slide -->
                                <div class="carousel-item show">
                                  <div class="d-flex align-items-center mb-9">
                                    
                                    <div class="m-0">
                                      <h4 class="text-gray-600 mb-3">Sprint 1 - Task Committed</h4>
                        
                                      <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">
                                            <i class="bi bi-calendar text-gray-600 me-2"></i> Start Date: 2023-08-01
                                          </span>
                                          <span class="d-flex align-items-center text-gray-400 fs-7">
                                            <i class="bi bi-calendar text-gray-600 me-2"></i> End Date: 2023-08-07
                                          </span>
                                        </div>
                        
                                        <div class="d-flex flex-column flex-shrink-0">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">
                                            <i class="bi bi-people text-gray-600 me-2"></i> Assign To: John Doe
                                          </span>
                                          <span class="d-flex align-items-center text-gray-400 fs-7">
                                            <i class="bi bi-pie-chart text-gray-600 me-2"></i> Progress: 80%
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">View Details</a>
                        
                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#joinTaskModal">Join Task</a>
                                  </div>
                                </div>
                        
                                <!-- Sprint 2 Slide -->
                                <div class="carousel-item">
                                  <div class="d-flex align-items-center mb-9">
                                    
                                    <div class="m-0">
                                      <h4 class="text-gray-600 mb-3">Sprint 2 - Issue Fixed</h4>
                        
                                      <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">
                                            <i class="bi bi-calendar text-gray-600 me-2"></i> Start Date: 2023-08-08
                                          </span>
                                          <span class="d-flex align-items-center text-gray-400 fs-7">
                                            <i class="bi bi-calendar text-gray-600 me-2"></i> End Date: 2023-08-14
                                          </span>
                                        </div>
                        
                                        <div class="d-flex flex-column flex-shrink-0">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">
                                            <i class="bi bi-people text-gray-600 me-2"></i> Assign To: Jane Smith
                                          </span>
                                          <span class="d-flex align-items-center text-gray-400 fs-7">
                                            <i class="bi bi-pie-chart text-gray-600 me-2"></i> Progress: 60%
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">View Details</a>
                        
                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#joinTaskModal">Join Task</a>
                                  </div>
                                </div>
                        
                                <!-- Sprint 3 Slide -->
                                <div class="carousel-item active">
                                  <div class="d-flex align-items-center mb-9">                                    
                                    <div class="m-0">
                                      <h4 class="text-gray-600 mb-3">Sprint 3 - Task Committed</h4>
                        
                                      <div class="d-flex d-grid gap-5">
                                        <div class="d-flex flex-column flex-shrink-0 me-4">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">
                                            <i class="bi bi-calendar text-gray-600 me-2"></i> Start Date: 2023-08-15
                                          </span>
                                          <span class="d-flex align-items-center text-gray-400 fs-7">
                                            <i class="bi bi-calendar text-gray-600 me-2"></i> End Date: 2023-08-21
                                          </span>
                                        </div>
                        
                                        <div class="d-flex flex-column flex-shrink-0">
                                          <span class="d-flex align-items-center fs-7 text-gray-400 mb-2">
                                            <i class="bi bi-people text-gray-600 me-2"></i> Assign To: John Doe
                                          </span>
                                          <span class="d-flex align-items-center text-gray-400 fs-7">
                                            <i class="bi bi-pie-chart text-gray-600 me-2"></i> Progress: 40%
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                                  <div class="m-0">
                                    <a href="#" class="btn btn-sm btn-light me-2 mb-2">View Details</a>
                        
                                    <a href="#" class="btn btn-sm btn-success mb-2" data-bs-toggle="modal" data-bs-target="#joinTaskModal">Join Task</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>

                      <div class="card border-transparent bg-info" data-bs-theme="light">
                        <div class="card-body d-flex ps-xl-15">
                          <div class="m-0">
                            <div class="position-relative fs-2x z-index-2 text-white mb-7">
                              <span class="me-2">
                                You have got
                                <span class="position-relative d-inline-block text-danger">
                                  <a href="#" class="text-danger opacity-75-hover">2300 bonus</a>

                                  <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                </span>
                              </span>
                              points.<br />
                              Feel free to use them in your tasks
                            </div>

                            <div class="mb-3">
                              <a href="#" class="btn btn-info  me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                Get Reward
                              </a>

                              <a href="#" class="btn btn-color-white  bg-opacity-15 bg-hover-opacity-25 ">
                                How to
                              </a>
                            </div>
                          </div>
                          <div class="position-absolute me-3 bottom-0 end-0 h-200px">
                          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="study">
                            <rect width="64" height="64"/>
                            <g id="smoke">
                            <path id="smoke-2" d="M9 21L9.55279 19.8944C9.83431 19.3314 9.83431 18.6686 9.55279 18.1056L9 17L8.44721 15.8944C8.16569 15.3314 8.16569 14.6686 8.44721 14.1056L9 13" stroke="#797270"/>
                            <path id="smoke-1" d="M6.5 22L7.05279 20.8944C7.33431 20.3314 7.33431 19.6686 7.05279 19.1056L6.5 18L5.94721 16.8944C5.66569 16.3314 5.66569 15.6686 5.94721 15.1056L6.5 14" stroke="#797270"/>
                            </g>
                            <g id="laptop">
                            <rect id="laptop-base" x="17" y="28" width="20" height="3" fill="#F3F3F3" stroke="#453F3C" stroke-width="2"/>
                            <rect id="laptop-screen" x="18" y="17" width="18" height="11" fill="#5A524E" stroke="#453F3C" stroke-width="2"/>
                            <rect id="line-1" x="20" y="19" width="14" height="1" fill="#F78764"/>
                            <rect id="line-2" x="20" y="21" width="14" height="1" fill="#F9AB82"/>
                            <rect id="line-3" x="20" y="23" width="14" height="1" fill="#F78764"/>
                            <rect id="line-4" x="20" y="25" width="14" height="1" fill="#F9AB82"/>
                            </g>
                            <g id="cup">
                            <rect id="Rectangle 978" x="5" y="24" width="5" height="7" fill="#CCC4C4" stroke="#453F3C" stroke-width="2"/>
                            <path id="Ellipse 416" d="M11 28C12.1046 28 13 27.1046 13 26C13 24.8954 12.1046 24 11 24" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 996" x="6" y="25" width="3" height="1" fill="#D6D2D1"/>
                            </g>
                            <g id="books">
                            <rect id="Rectangle 984" x="58" y="27" width="4" height="14" transform="rotate(90 58 27)" fill="#B16B4F" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 985" x="56" y="23" width="4" height="14" transform="rotate(90 56 23)" fill="#797270" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 986" x="60" y="19" width="4" height="14" transform="rotate(90 60 19)" fill="#F78764" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 993" x="47" y="20" width="12" height="1" fill="#F9AB82"/>
                            <rect id="Rectangle 994" x="43" y="24" width="12" height="1" fill="#54504E"/>
                            <rect id="Rectangle 995" x="45" y="28" width="12" height="1" fill="#804D39"/>
                            </g>
                            <g id="desk">
                            <rect id="Rectangle 973" x="4" y="31" width="56" height="5" fill="#797270" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 987" x="10" y="36" width="30" height="6" fill="#797270" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 975" x="6" y="36" width="4" height="24" fill="#797270" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 974" x="40" y="36" width="18" height="24" fill="#797270" stroke="#453F3C" stroke-width="2"/>
                            <line id="Line 129" x1="40" y1="48" x2="58" y2="48" stroke="#453F3C" stroke-width="2"/>
                            <line id="Line 130" x1="22" y1="39" x2="28" y2="39" stroke="#453F3C" stroke-width="2"/>
                            <line id="Line 142" x1="46" y1="42" x2="52" y2="42" stroke="#453F3C" stroke-width="2"/>
                            <line id="Line 131" x1="46" y1="54" x2="52" y2="54" stroke="#453F3C" stroke-width="2"/>
                            <rect id="Rectangle 988" x="11" y="37" width="28" height="1" fill="#54504E"/>
                            <rect id="Rectangle 992" x="5" y="32" width="54" height="1" fill="#9E9492"/>
                            <rect id="Rectangle 989" x="7" y="37" width="2" height="1" fill="#54504E"/>
                            <rect id="Rectangle 990" x="41" y="37" width="16" height="1" fill="#54504E"/>
                            <rect id="Rectangle 991" x="41" y="49" width="16" height="1" fill="#54504E"/>
                            <line id="Line 143" y1="60" x2="64" y2="60" stroke="#453F3C" stroke-width="2"/>
                            </g>
                            </g>
                            </svg>


                          </div>
                          <!-- <img src="assets/media/images/chat.png" class="position-absolute me-3 bottom-0 end-0 h-200px" alt="demo" /> -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4 mt-4">
                    <div class="col-xl-4 mb-4">
                      <div class="card h-lg-100">
                        <div class="card-header position-relative py-0 border-bottom-1">
                            <div class="card-title flex-column">
                                <h3 class="text-gray-700 mb-1">Total Tasks</h3>                    
                                <div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
                            </div>
                    
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                            </div>
                        </div>
                    
                        <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                            <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    
                                <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                    
                                <div class="fw-semibold">
                                    <a href="#" class="fs-6  text-gray-700 text-hover-primary">Create FureStibe branding logo</a>
                    
                                    <div class="text-gray-400">Due in 1 day <a href="#">Karina Clark</a></div>
                                </div>
                    
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-3"></i>
                                </button>
                    
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64c9f9715efee">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>
                    
                                    <div class="separator border-gray-200"></div>
                    
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Status:</label>
                                            <div>
                                              <select
                                              class="form-select"
                                             
                                              data-kt-select2="true"
                                              data-close-on-select="false"
                                              data-placeholder="Select option"
                                              data-dropdown-parent="#kt_menu_64c9f9715f030"
                                              data-allow-clear="true"
                                              data-select2-id="select2-data-23-4edp"
                                              tabindex="-1"
                                              aria-hidden="true"
                                              data-kt-initialized="1"
                                          >
                                              
                                              <option value="1">Approved</option>
                                              <option value="2">Pending</option>
                                              <option value="2">In Process</option>
                                              <option value="2">Rejected</option>
                                          </select>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Member Type:</label>
                    
                                            <div class="d-flex">
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                    
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Notifications:</label>
                    
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="" />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                    
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    
                                <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                    
                                <div class="fw-semibold">
                                    <a href="#" class="fs-6  text-gray-700 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                    
                                    <div class="text-gray-400">Due in 3 days <a href="#">Rober Doe</a></div>
                                </div>
                    
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-3"></i>
                                </button>
                    
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64c9f9715f030">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>
                    
                                    <div class="separator border-gray-200"></div>
                    
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Status:</label>
                    
                                            <div>
                                                <select
                                                    class="form-select"
                                                   
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64c9f9715f030"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-23-4edp"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Member Type:</label>
                    
                                            <div class="d-flex">
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                    
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Notifications:</label>
                    
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="" />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                    
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    
                                <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                    
                                <div class="fw-semibold">
                                    <a href="#" class="fs-6  text-gray-700 text-hover-primary">9 Degree Porject Estimation</a>
                    
                                    <div class="text-gray-400">Due in 1 week <a href="#">Neil Owen</a></div>
                                </div>
                    
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-3"></i>
                                </button>
                    
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64c9f9715f052">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>
                    
                                    <div class="separator border-gray-200"></div>
                    
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Status:</label>
                    
                                            <div>
                                                <select
                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                   
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64c9f9715f052"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-25-lzfn"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-l9lg" style="width: 100%;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                            <ul class="select2-selection__rendered" id="select2-ydt3-container"></ul>
                                                            <span class="select2-search select2-search--inline">
                                                                <textarea
                                                                    class="select2-search__field"
                                                                    type="search"
                                                                    tabindex="0"
                                                                    autocorrect="off"
                                                                    autocapitalize="none"
                                                                    spellcheck="false"
                                                                    role="searchbox"
                                                                    aria-autocomplete="list"
                                                                    autocomplete="off"
                                                                    aria-label="Search"
                                                                    aria-describedby="select2-ydt3-container"
                                                                    placeholder="Select option"
                                                                    style="width: 100%;"
                                                                ></textarea>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Member Type:</label>
                    
                                            <div class="d-flex">
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                    
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Notifications:</label>
                    
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="" />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                    
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="d-flex align-items-center position-relative mb-7">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    
                                <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                    
                                <div class="fw-semibold">
                                    <a href="#" class="fs-6  text-gray-700 text-hover-primary">Dashgboard UI &amp; UX for Leafr CRM</a>
                    
                                    <div class="text-gray-400">Due in 1 week <a href="#">Olivia Wild</a></div>
                                </div>
                    
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-3"></i>
                                </button>
                    
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64c9f9715f06f">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>
                    
                                    <div class="separator border-gray-200"></div>
                    
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Status:</label>
                    
                                            <div>
                                                <select
                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                   
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64c9f9715f06f"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-27-kupw"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-28-8qrs" style="width: 100%;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                            <ul class="select2-selection__rendered" id="select2-ydcb-container"></ul>
                                                            <span class="select2-search select2-search--inline">
                                                                <textarea
                                                                    class="select2-search__field"
                                                                    type="search"
                                                                    tabindex="0"
                                                                    autocorrect="off"
                                                                    autocapitalize="none"
                                                                    spellcheck="false"
                                                                    role="searchbox"
                                                                    aria-autocomplete="list"
                                                                    autocomplete="off"
                                                                    aria-label="Search"
                                                                    aria-describedby="select2-ydcb-container"
                                                                    placeholder="Select option"
                                                                    style="width: 100%;"
                                                                ></textarea>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Member Type:</label>
                    
                                            <div class="d-flex">
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                    
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Notifications:</label>
                    
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="" />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                    
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="d-flex align-items-center position-relative">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                    
                                <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                                    <input class="form-check-input" type="checkbox" value="" />
                                </div>
                    
                                <div class="fw-semibold">
                                    <a href="#" class="fs-6  text-gray-700 text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
                    
                                    <div class="text-gray-400">Due in 2 weeks <a href="#">Sean Bean</a></div>
                                </div>
                    
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-3"></i>
                                </button>
                    
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64c9f9715f08b">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>
                    
                                    <div class="separator border-gray-200"></div>
                    
                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Status:</label>
                    
                                            <div>
                                                <select
                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                   
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64c9f9715f08b"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-29-e909"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-30-79ns" style="width: 100%;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                            <ul class="select2-selection__rendered" id="select2-4hl1-container"></ul>
                                                            <span class="select2-search select2-search--inline">
                                                                <textarea
                                                                    class="select2-search__field"
                                                                    type="search"
                                                                    tabindex="0"
                                                                    autocorrect="off"
                                                                    autocapitalize="none"
                                                                    spellcheck="false"
                                                                    role="searchbox"
                                                                    aria-autocomplete="list"
                                                                    autocomplete="off"
                                                                    aria-label="Search"
                                                                    aria-describedby="select2-4hl1-container"
                                                                    placeholder="Select option"
                                                                    style="width: 100%;"
                                                                ></textarea>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Member Type:</label>
                    
                                            <div class="d-flex">
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                    
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="mb-10">
                                            <label class="form-label fw-semibold">Notifications:</label>
                    
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="" />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                    
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                      
                    </div>

                    <div class="col-xl-8 mb-4">
                      <div class="card h-xl-100">
                        <div class="card-header position-relative py-0 border-bottom-1">
                          <h3 class="card-title text-gray-700">Active Tasks</h3>

                          <ul class="nav nav-stretch nav-pills nav-pills-custom d-flex mt-4" role="tablist">
                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a class="nav-link btn btn-color-gray-400 flex-center px-3 active" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_day" aria-selected="true" role="tab">
                                <span class="nav-text px-4">Day</span>

                                <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a class="nav-link btn btn-color-gray-400 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_week" aria-selected="false" role="tab" tabindex="-1">
                                <span class="nav-text px-4">Week</span>

                                <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a class="nav-link btn btn-color-gray-400 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_month" aria-selected="false" role="tab" tabindex="-1">
                                <span class="nav-text px-4">Month</span>

                                <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a class="nav-link btn btn-color-gray-400 flex-center px-3" data-kt-timeline-widget-4="tab" data-bs-toggle="tab" href="#kt_timeline_widget_4_tab_2022" aria-selected="false" role="tab" tabindex="-1">
                                <span class="nav-text px-4">2022</span>

                                <span class="bullet-custom position-absolute z-index-2 w-100 h-1px top-100 bottom-n100 bg-primary rounded"></span>
                              </a>
                            </li>
                          </ul>
                        </div>

                        <div class="card-body pb-0">
                          <div class="tab-content">
                            <div class="tab-pane blockui active show" id="kt_timeline_widget_4_tab_day" role="tabpanel" aria-labelledby="day-tab" data-kt-timeline-widget-4-blockui="true">
                              <div class="table-responsive pb-10">
                                <div id="kt_timeline_widget_4_1" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/" style="position: relative;">
                                  <div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 354px;">
                                    <div class="vis-panel vis-background" style="height: 354px; width: 733px; left: 0px; top: 0px;"></div>
                                    <div class="vis-panel vis-background vis-vertical" style="height: 354px; width: 607px; left: 128px; top: 0px;">
                                      <div class="vis-axis" style="top: 304px; left: 0px;">
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                      </div>
                                      <div class="vis-time-axis vis-background">
                                        <div class="vis-grid vis-vertical vis-minor vis-h16 vis-today vis-even" style="width: 195.283px; height: 330px; transform: translate(-30.9817px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-h17 vis-today vis-odd" style="width: 195.283px; height: 330px; transform: translate(164.302px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-h18 vis-today vis-even" style="width: 195.283px; height: 330px; transform: translate(359.585px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-h19 vis-today vis-odd" style="width: 195.283px; height: 330px; transform: translate(554.868px, -1px);"></div>
                                      </div>
                                    </div>
                                    <div class="vis-panel vis-background vis-horizontal" style="height: 305px; width: 733px; left: 0px; top: -1px;"></div>
                                    <div
                                      class="vis-panel vis-center"
                                      style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; width: 607px; left: 127px; top: -1px;"
                                    >
                                      <div class="vis-content" style="left: 0px; transform: translateY(0px);">
                                        <div class="vis-itemset" style="height: 303px;">
                                          <div class="vis-background">
                                            <div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 78px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                          </div>
                                          <div class="vis-foreground">
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(10.5749px); width: 292.925px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width: 60%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/4.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Meeting</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        60%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(205.858px); width: 195.283px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width: 57%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Testing</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        60%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(108.217px); width: 390.567px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width: 55%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/3.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Landing page</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        55%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 78px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(303.5px); width: 292.925px; top: 18px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width: 75%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/3.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/4.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Products module</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        75%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 305px; left: 0px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;">
                                        <div class="vis-labelset">
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Phase 2.6 QA</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">UI Design</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 78px;"><div class="vis-inner">Development</div></div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-right" style="height: 305px; left: 734px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;"></div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-top" style="width: 607px; left: 127px; top: 0px;"></div>
                                    <div class="vis-panel vis-bottom" style="width: 607px; left: 127px; top: 304px;">
                                      <div class="vis-time-axis vis-foreground" style="height: 50px;">
                                        <div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-major vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-minor vis-h16 vis-today vis-even" style="transform: translate(-30.4817px, 0px); width: 195.283px;">16:00</div>
                                        <div class="vis-text vis-minor vis-h17 vis-today vis-odd" style="transform: translate(164.802px, 0px); width: 195.283px;">17:00</div>
                                        <div class="vis-text vis-minor vis-h18 vis-today vis-even" style="transform: translate(360.085px, 0px); width: 195.283px;">18:00</div>
                                        <div class="vis-text vis-minor vis-h19 vis-today vis-odd" style="transform: translate(555.368px, 0px); width: 195.283px;">19:00</div>
                                        <div class="vis-text vis-major vis-h19 vis-today vis-odd" style="transform: translate(0px, 25px);"><div>Tue 20 June</div></div>
                                      </div>
                                    </div>
                                    <div class="vis-rolling-mode-btn" style="visibility: hidden;"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane blockui" id="kt_timeline_widget_4_tab_week" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                              <div class="table-responsive pb-10">
                                <div id="kt_timeline_widget_4_2" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/" style="position: relative;">
                                  <div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 269px;">
                                    <div class="vis-panel vis-background" style="height: 269px; width: 700px; left: 0px; top: 0px;"></div>
                                    <div class="vis-panel vis-background vis-vertical" style="height: 269px; width: 574px; left: 128px; top: 0px;">
                                      <div class="vis-axis" style="top: 219px; left: 0px;">
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                      </div>
                                      <div class="vis-time-axis vis-background">
                                        <div class="vis-grid vis-vertical vis-minor vis-day17 vis-june vis-current-month vis-saturday vis-even" style="width: 95.6667px; height: 245px; transform: translate(-0.5px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day18 vis-june vis-current-month vis-sunday vis-odd" style="width: 95.6667px; height: 245px; transform: translate(95.1667px, -1px);"></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day19 vis-june vis-yesterday vis-current-month vis-yesterday vis-monday vis-even"
                                          style="width: 95.6667px; height: 245px; transform: translate(190.833px, -1px);"
                                        ></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day20 vis-june vis-today vis-current-month vis-today vis-tuesday vis-odd"
                                          style="width: 95.6667px; height: 245px; transform: translate(286.5px, -1px);"
                                        ></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day21 vis-june vis-tomorrow vis-current-month vis-tomorrow vis-wednesday vis-even"
                                          style="width: 95.6667px; height: 245px; transform: translate(382.167px, -1px);"
                                        ></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day22 vis-june vis-current-month vis-thursday vis-odd" style="width: 95.6667px; height: 245px; transform: translate(477.833px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day23 vis-june vis-current-month vis-friday vis-even" style="width: 95.6667px; height: 245px; transform: translate(573.5px, -1px);"></div>
                                      </div>
                                    </div>
                                    <div class="vis-panel vis-background vis-horizontal" style="height: 220px; width: 700px; left: 0px; top: -1px;"></div>
                                    <div
                                      class="vis-panel vis-center"
                                      style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 220px; width: 574px; left: 127px; top: -1px;"
                                    >
                                      <div class="vis-content" style="left: 0px; transform: translateY(0px);">
                                        <div class="vis-itemset" style="height: 218px;">
                                          <div class="vis-background">
                                            <div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                          </div>
                                          <div class="vis-foreground">
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(351.668px); width: 669.667px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width: 71%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Framework</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        71%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width: 100%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Accessibility</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        100%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(638.668px); width: 509.332px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width: 69%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Microsites</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        69%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width: 84%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/3.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Deployment</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        84%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 220px; left: 0px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;">
                                        <div class="vis-labelset">
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">Phase 2.6 QA</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">UI Design</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">Development</div></div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-right" style="height: 220px; left: 701px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;"></div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-top" style="width: 574px; left: 127px; top: 0px;"></div>
                                    <div class="vis-panel vis-bottom" style="width: 574px; left: 127px; top: 219px;">
                                      <div class="vis-time-axis vis-foreground" style="height: 50px;">
                                        <div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-major vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-minor vis-day17 vis-june vis-current-month vis-saturday vis-even" style="transform: translate(0px, 0px); width: 95.6667px;">17</div>
                                        <div class="vis-text vis-minor vis-day18 vis-june vis-current-month vis-sunday vis-odd" style="transform: translate(95.6667px, 0px); width: 95.6667px;">18</div>
                                        <div class="vis-text vis-minor vis-day19 vis-june vis-yesterday vis-current-month vis-yesterday vis-monday vis-even" style="transform: translate(191.333px, 0px); width: 95.6667px;">
                                          19
                                        </div>
                                        <div class="vis-text vis-minor vis-day20 vis-june vis-today vis-current-month vis-today vis-tuesday vis-odd" style="transform: translate(287px, 0px); width: 95.6667px;">
                                          20
                                        </div>
                                        <div class="vis-text vis-minor vis-day21 vis-june vis-tomorrow vis-current-month vis-tomorrow vis-wednesday vis-even" style="transform: translate(382.667px, 0px); width: 95.6667px;">
                                          21
                                        </div>
                                        <div class="vis-text vis-minor vis-day22 vis-june vis-current-month vis-thursday vis-odd" style="transform: translate(478.333px, 0px); width: 95.6667px;">
                                          22
                                        </div>
                                        <div class="vis-text vis-minor vis-day23 vis-june vis-current-month vis-friday vis-even" style="transform: translate(574px, 0px); width: 95.6667px;">23</div>
                                        <div class="vis-text vis-major vis-day23 vis-june vis-current-month vis-friday vis-even" style="transform: translate(0px, 25px);"><div>June 2023</div></div>
                                      </div>
                                    </div>
                                    <div class="vis-rolling-mode-btn" style="visibility: hidden;"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane blockui" id="kt_timeline_widget_4_tab_month" role="tabpanel" aria-labelledby="month-tab" data-kt-timeline-widget-4-blockui="true">
                              <div class="table-responsive pb-10">
                                <div id="kt_timeline_widget_4_3" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/" style="position: relative;">
                                  <div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 228px;">
                                    <div class="vis-panel vis-background" style="height: 228px; width: 700px; left: 0px; top: 0px;"></div>
                                    <div class="vis-panel vis-background vis-vertical" style="height: 228px; width: 574px; left: 128px; top: 0px;">
                                      <div class="vis-axis" style="top: 178px; left: 0px;">
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                      </div>
                                      <div class="vis-time-axis vis-background">
                                        <div class="vis-grid vis-vertical vis-minor vis-day17 vis-june vis-current-month vis-saturday vis-even" style="width: 95.6667px; height: 204px; transform: translate(-0.5px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day18 vis-june vis-current-month vis-sunday vis-odd" style="width: 95.6667px; height: 204px; transform: translate(95.1667px, -1px);"></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day19 vis-june vis-yesterday vis-current-month vis-yesterday vis-monday vis-even"
                                          style="width: 95.6667px; height: 204px; transform: translate(190.833px, -1px);"
                                        ></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day20 vis-june vis-today vis-current-month vis-today vis-tuesday vis-odd"
                                          style="width: 95.6667px; height: 204px; transform: translate(286.5px, -1px);"
                                        ></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day21 vis-june vis-tomorrow vis-current-month vis-tomorrow vis-wednesday vis-even"
                                          style="width: 95.6667px; height: 204px; transform: translate(382.167px, -1px);"
                                        ></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day22 vis-june vis-current-month vis-thursday vis-odd" style="width: 95.6667px; height: 204px; transform: translate(477.833px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day23 vis-june vis-current-month vis-friday vis-even" style="width: 95.6667px; height: 204px; transform: translate(573.5px, -1px);"></div>
                                      </div>
                                    </div>
                                    <div class="vis-panel vis-background vis-horizontal" style="height: 179px; width: 700px; left: 0px; top: -1px;"></div>
                                    <div
                                      class="vis-panel vis-center"
                                      style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 179px; width: 574px; left: 127px; top: -1px;"
                                    >
                                      <div class="vis-content" style="left: 0px; transform: translateY(0px);">
                                        <div class="vis-itemset" style="height: 177px;">
                                          <div class="vis-background">
                                            <div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                          </div>
                                          <div class="vis-foreground">
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(351.669px); width: 796.331px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width: 79%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Tags</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        79%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width: 64%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Testing</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        64%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width: 82%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Media</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        82%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width: 58%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/3.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Plugins</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        58%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 179px; left: 0px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;">
                                        <div class="vis-labelset">
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">Phase 2.6 QA</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">UI Design</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">Development</div></div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-right" style="height: 179px; left: 701px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;"></div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-top" style="width: 574px; left: 127px; top: 0px;"></div>
                                    <div class="vis-panel vis-bottom" style="width: 574px; left: 127px; top: 178px;">
                                      <div class="vis-time-axis vis-foreground" style="height: 50px;">
                                        <div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-major vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-minor vis-day17 vis-june vis-current-month vis-saturday vis-even" style="transform: translate(0px, 0px); width: 95.6667px;">17</div>
                                        <div class="vis-text vis-minor vis-day18 vis-june vis-current-month vis-sunday vis-odd" style="transform: translate(95.6667px, 0px); width: 95.6667px;">18</div>
                                        <div class="vis-text vis-minor vis-day19 vis-june vis-yesterday vis-current-month vis-yesterday vis-monday vis-even" style="transform: translate(191.333px, 0px); width: 95.6667px;">
                                          19
                                        </div>
                                        <div class="vis-text vis-minor vis-day20 vis-june vis-today vis-current-month vis-today vis-tuesday vis-odd" style="transform: translate(287px, 0px); width: 95.6667px;">
                                          20
                                        </div>
                                        <div class="vis-text vis-minor vis-day21 vis-june vis-tomorrow vis-current-month vis-tomorrow vis-wednesday vis-even" style="transform: translate(382.667px, 0px); width: 95.6667px;">
                                          21
                                        </div>
                                        <div class="vis-text vis-minor vis-day22 vis-june vis-current-month vis-thursday vis-odd" style="transform: translate(478.333px, 0px); width: 95.6667px;">
                                          22
                                        </div>
                                        <div class="vis-text vis-minor vis-day23 vis-june vis-current-month vis-friday vis-even" style="transform: translate(574px, 0px); width: 95.6667px;">23</div>
                                        <div class="vis-text vis-major vis-day23 vis-june vis-current-month vis-friday vis-even" style="transform: translate(0px, 25px);"><div>June 2023</div></div>
                                      </div>
                                    </div>
                                    <div class="vis-rolling-mode-btn" style="visibility: hidden;"></div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="tab-pane blockui" id="kt_timeline_widget_4_tab_2022" role="tabpanel" aria-labelledby="week-tab" data-kt-timeline-widget-4-blockui="true">
                              <div class="table-responsive pb-10">
                                <div id="kt_timeline_widget_4_4" class="vis-timeline-custom h-350px min-w-700px" data-kt-timeline-widget-4-image-root="assets/media/" style="position: relative;">
                                  <div class="vis-timeline vis-bottom vis-ltr" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); visibility: visible; height: 228px;">
                                    <div class="vis-panel vis-background" style="height: 228px; width: 700px; left: 0px; top: 0px;"></div>
                                    <div class="vis-panel vis-background vis-vertical" style="height: 228px; width: 574px; left: 128px; top: 0px;">
                                      <div class="vis-axis" style="top: 178px; left: 0px;">
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                        <div class="vis-group"></div>
                                      </div>
                                      <div class="vis-time-axis vis-background">
                                        <div class="vis-grid vis-vertical vis-minor vis-day17 vis-june vis-current-month vis-saturday vis-even" style="width: 95.6667px; height: 204px; transform: translate(-0.5px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day18 vis-june vis-current-month vis-sunday vis-odd" style="width: 95.6667px; height: 204px; transform: translate(95.1667px, -1px);"></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day19 vis-june vis-yesterday vis-current-month vis-yesterday vis-monday vis-even"
                                          style="width: 95.6667px; height: 204px; transform: translate(190.833px, -1px);"
                                        ></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day20 vis-june vis-today vis-current-month vis-today vis-tuesday vis-odd"
                                          style="width: 95.6667px; height: 204px; transform: translate(286.5px, -1px);"
                                        ></div>
                                        <div
                                          class="vis-grid vis-vertical vis-minor vis-day21 vis-june vis-tomorrow vis-current-month vis-tomorrow vis-wednesday vis-even"
                                          style="width: 95.6667px; height: 204px; transform: translate(382.167px, -1px);"
                                        ></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day22 vis-june vis-current-month vis-thursday vis-odd" style="width: 95.6667px; height: 204px; transform: translate(477.833px, -1px);"></div>
                                        <div class="vis-grid vis-vertical vis-minor vis-day23 vis-june vis-current-month vis-friday vis-even" style="width: 95.6667px; height: 204px; transform: translate(573.5px, -1px);"></div>
                                      </div>
                                    </div>
                                    <div class="vis-panel vis-background vis-horizontal" style="height: 179px; width: 700px; left: 0px; top: -1px;"></div>
                                    <div
                                      class="vis-panel vis-center"
                                      style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 179px; width: 574px; left: 127px; top: -1px;"
                                    >
                                      <div class="vis-content" style="left: 0px; transform: translateY(0px);">
                                        <div class="vis-itemset" style="height: 177px;">
                                          <div class="vis-background">
                                            <div class="vis-group" style="height: 0px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 75px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                            <div class="vis-group" style="height: 34px;"><div style="visibility: hidden; position: absolute;"></div></div>
                                          </div>
                                          <div class="vis-foreground">
                                            <div class="vis-group" style="height: 75px;">
                                              <div class="vis-item vis-range vis-readonly" style="transform: translateX(351.67px); width: 796.33px; top: 17.5px;">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content" style="transform: translateX(0px);">
                                                    <div class="rounded-pill bg-light-primary d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-primary start-0 top-0 h-100 z-index-1" style="width: 51%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Tags</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        51%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-success d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-success start-0 top-0 h-100 z-index-1" style="width: 64%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Testing</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        64%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-danger d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-danger start-0 top-0 h-100 z-index-1" style="width: 54%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/2.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Media</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        54%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                            <div class="vis-group" style="height: 34px;">
                                              <div class="vis-item vis-range vis-readonly">
                                                <div class="vis-item-overflow">
                                                  <div class="vis-item-content">
                                                    <div class="rounded-pill bg-light-info d-flex align-items-center position-relative h-40px w-100 p-2 overflow-hidden">
                                                      <div class="position-absolute rounded-pill d-block bg-info start-0 top-0 h-100 z-index-1" style="width: 348%;"></div>

                                                      <div class="d-flex align-items-center position-relative z-index-2">
                                                        <div class="symbol-group symbol-hover flex-nowrap me-3">
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                          <div class="symbol symbol-circle symbol-25px"><img alt="image" src="assets/media/avatars/1.jpg" /></div>
                                                        </div>

                                                        <a href="#" class="text-white text-hover-dark">Plugins</a>
                                                      </div>

                                                      <div class="d-flex flex-center bg-body rounded-pill fs-7 ms-auto h-100 px-3 position-relative z-index-2">
                                                        348%
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="vis-item-visible-frame"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-left" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 179px; left: 0px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;">
                                        <div class="vis-labelset">
                                          <div class="vis-label vis-group-level-0" title="" style="height: 75px;"><div class="vis-inner">Research</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">Phase 2.6 QA</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">UI Design</div></div>
                                          <div class="vis-label vis-group-level-0" title="" style="height: 34px;"><div class="vis-inner">Development</div></div>
                                        </div>
                                      </div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-right" style="height: 179px; left: 701px; top: -1px;">
                                      <div class="vis-content" style="left: 0px; top: 0px;"></div>
                                      <div class="vis-shadow vis-top" style="visibility: hidden;"></div>
                                      <div class="vis-shadow vis-bottom" style="visibility: hidden;"></div>
                                    </div>
                                    <div class="vis-panel vis-top" style="width: 574px; left: 127px; top: 0px;"></div>
                                    <div class="vis-panel vis-bottom" style="width: 574px; left: 127px; top: 178px;">
                                      <div class="vis-time-axis vis-foreground" style="height: 50px;">
                                        <div class="vis-text vis-minor vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-major vis-measure" style="position: absolute;">0</div>
                                        <div class="vis-text vis-minor vis-day17 vis-june vis-current-month vis-saturday vis-even" style="transform: translate(0px, 0px); width: 95.6667px;">17</div>
                                        <div class="vis-text vis-minor vis-day18 vis-june vis-current-month vis-sunday vis-odd" style="transform: translate(95.6667px, 0px); width: 95.6667px;">18</div>
                                        <div class="vis-text vis-minor vis-day19 vis-june vis-yesterday vis-current-month vis-yesterday vis-monday vis-even" style="transform: translate(191.333px, 0px); width: 95.6667px;">
                                          19
                                        </div>
                                        <div class="vis-text vis-minor vis-day20 vis-june vis-today vis-current-month vis-today vis-tuesday vis-odd" style="transform: translate(287px, 0px); width: 95.6667px;">
                                          20
                                        </div>
                                        <div class="vis-text vis-minor vis-day21 vis-june vis-tomorrow vis-current-month vis-tomorrow vis-wednesday vis-even" style="transform: translate(382.667px, 0px); width: 95.6667px;">
                                          21
                                        </div>
                                        <div class="vis-text vis-minor vis-day22 vis-june vis-current-month vis-thursday vis-odd" style="transform: translate(478.333px, 0px); width: 95.6667px;">
                                          22
                                        </div>
                                        <div class="vis-text vis-minor vis-day23 vis-june vis-current-month vis-friday vis-even" style="transform: translate(574px, 0px); width: 95.6667px;">23</div>
                                        <div class="vis-text vis-major vis-day23 vis-june vis-current-month vis-friday vis-even" style="transform: translate(0px, 25px);"><div>June 2023</div></div>
                                      </div>
                                    </div>
                                    <div class="vis-rolling-mode-btn" style="visibility: hidden;"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                   
                    <div class="col-xl-4 mt-2 mb-2">
                      <div class="card h-md-100">
                        <div class="card-header border-bottom-1">
                          <h3 class="card-title align-items-start flex-column">
                            <span class="card-label text-gray-700">What’s up Today</span>

                            <span class="text-muted mt-1 fs-7">Total 424,567 deliveries</span>
                          </h3>

                          <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light">Report Cecnter</a>
                          </div>
                        </div>

                        <div class="card-body pt-7 px-0">
                          <ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5" role="tablist">
                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a
                                class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                data-bs-toggle="tab"
                                href="#kt_timeline_widget_3_tab_content_1"
                                aria-selected="false"
                                tabindex="-1"
                                role="tab"
                              >
                                <span class="fs-7">Fr</span>
                                <span class="">20</span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a
                                class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                data-bs-toggle="tab"
                                href="#kt_timeline_widget_3_tab_content_2"
                                aria-selected="false"
                                tabindex="-1"
                                role="tab"
                              >
                                <span class="fs-7">Sa</span>
                                <span class="">21</span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a
                                class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                data-bs-toggle="tab"
                                href="#kt_timeline_widget_3_tab_content_3"
                                aria-selected="false"
                                tabindex="-1"
                                role="tab"
                              >
                                <span class="fs-7">Su</span>
                                <span class="">22</span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" data-bs-toggle="tab" href="#kt_timeline_widget_3_tab_content_4" aria-selected="true" role="tab">
                                <span class="fs-7">Tu</span>
                                <span class="">23</span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a
                                class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                data-bs-toggle="tab"
                                href="#kt_timeline_widget_3_tab_content_5"
                                aria-selected="false"
                                tabindex="-1"
                                role="tab"
                              >
                                <span class="fs-7">Tu</span>
                                <span class="">24</span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a
                                class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                data-bs-toggle="tab"
                                href="#kt_timeline_widget_3_tab_content_6"
                                aria-selected="false"
                                tabindex="-1"
                                role="tab"
                              >
                                <span class="fs-7">We</span>
                                <span class="">25</span>
                              </a>
                            </li>

                            <li class="nav-item p-0 ms-0" role="presentation">
                              <a
                                class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger"
                                data-bs-toggle="tab"
                                href="#kt_timeline_widget_3_tab_content_7"
                                aria-selected="false"
                                tabindex="-1"
                                role="tab"
                              >
                                <span class="fs-7">Th</span>
                                <span class="">26</span>
                              </a>
                            </li>

                          </ul>

                          <div class="tab-content mb-2 px-9">
                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Lead by John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Lead by John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-warning"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_11" role="tabpanel">
                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-info"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    16:30 - 17:00
                                    <span class="text-gray-400 "> PM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Dashboard UI/UX Design Review
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Team Leader - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-danger"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    10:20 - 11:00
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    Marketing Campaign Discussion
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>

                              <div class="d-flex align-items-center mb-6">
                                <span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-primary"></span>

                                <div class="flex-grow-1 me-5">
                                  <div class="text-gray-700">
                                    12:00 - 13:40
                                    <span class="text-gray-400 "> AM </span>
                                  </div>

                                  <div class="text-gray-700 ">
                                    9 Degree Project Estimation Meeting
                                  </div>

                                  <div class="text-gray-400 ">
                                    Lead by

                                    <a href="#" class="text-primary opacity-75-hover">Manager - John Doe</a>
                                  </div>
                                </div>

                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">View</a>
                              </div>
                            </div>
                          </div>

                          <div class="float-end d-none">
                            <a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>

                            <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
                          </div>
                        </div>
                      </div>
                    </div>
              

                    <div class="col-xl-8 mb-2 mt-2">
                      <div class="card h-md-100">
                        <div class="card-header">
                          <h3 class="card-title align-items-start flex-column">
                            <span class="card-label text-gray-700">Projects Stats</span>
                            <span class="text-gray-400 mt-1 fs-7">Updated 10 minutes ago</span>
                          </h3>
    
                          <div class="card-toolbar">
                            <div class="d-flex flex-stack flex-wrap gap-4">
                              <div class="d-flex align-items-center">
                                <div class="text-muted fs-7 me-2">Cateogry</div>
    
                                <select class="form-select form-select-transparent text-dark fs-7 lh-1 py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                  
                                  <option value="Show All" selected>Show All</option>
                                  <option value="a">Category A</option>
                                  <option value="b">Category B</option>
                                </select>
                              </div>
    
                              <div class="d-flex align-items-center">
                                <div class="text-muted fs-7 me-2">Status</div>
    
                                <select
                                  class="form-select form-select-transparent text-dark fs-7 lh-1 py-0 ps-3 w-auto"
                                  data-control="select2"
                                  data-hide-search="true"
                                  data-dropdown-css-class="w-150px"
                                  data-placeholder="Select an option"
                                  data-kt-table-widget-5="filter_status"
                                >
                                  
                                  <option value="Show All" selected>Show All</option>
                                  <option value="Completed">Completed</option>
                                  <option value="In Progress">In Progress</option>
                                  <option value="Hold">Hold</option>
                                </select>
                              </div>
    
                              <a href="#" class="btn btn-light btn-sm">View Projects</a>
                            </div>
                          </div>
                        </div>
    
                        <div class="card-body pt-6">
                          <div class="table-responsive">
                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                              <thead>
                                <tr class="fs-7 text-gray-400 border-bottom-0">
                                  <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                  <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                  <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                  <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                  <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                </tr>
                              </thead>
    
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div class="symbol symbol-50px me-3">
                                        <img src="assets/media/images/project.png" class="" alt="image" />
                                      </div>
    
                                      <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1 ">Project 1</a>
                                        <span class="text-gray-400 d-block fs-7">John Doe</span>
                                      </div>
                                    </div>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="text-gray-600 ">$32,400</span>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="badge badge-light-success fs-base">
                                      <i class="bi bi-arrow-up fs-5 text-success ms-n1"></i>
                                      9.2%
                                    </span>
                                  </td>
    
                                  <td class="text-end pe-12">
                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                  </td>
    
                                  <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                      <i class="bi bi-arrow-right fs-2 text-gray-500"></i>
                                    </a>
                                  </td>
                                </tr>
    
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div class="symbol symbol-50px me-3">
                                        <img src="assets/media/images/task-1.png" class="" alt="image" />
                                      </div>
    
                                      <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1 ">Project 2</a>
                                        <span class="text-gray-400 d-block fs-7">John Doe</span>
                                      </div>
                                    </div>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="text-gray-600 ">$256,910</span>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="badge badge-light-danger fs-base">
                                      <i class="bi bi-arrow-down fs-5 text-danger ms-n1"></i>
                                      0.4%
                                    </span>
                                  </td>
    
                                  <td class="text-end pe-12">
                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                  </td>
    
                                  <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px"> <i class="bi bi-arrow-right fs-2 text-gray-500"></i> </a>
                                  </td>
                                </tr>
    
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div class="symbol symbol-50px me-3">
                                        <img src="assets/media/images/task-2.png" class="" alt="image" />
                                      </div>
    
                                      <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1 ">Project 3</a>
                                        <span class="text-gray-400 d-block fs-7">John Doe</span>
                                      </div>
                                    </div>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="text-gray-600 ">$8,220</span>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="badge badge-light-success fs-base">
                                      <i class="bi bi-arrow-up fs-5 text-success ms-n1"></i>
                                      9.2%
                                    </span>
                                  </td>
    
                                  <td class="text-end pe-12">
                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                  </td>
    
                                  <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px"> <i class="bi bi-arrow-right fs-2 text-gray-500"></i> </a>
                                  </td>
                                </tr>
    
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div class="symbol symbol-50px me-3">
                                        <img src="assets/media/images/task-3.png" class="" alt="image" />
                                      </div>
    
                                      <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1 ">Project 4</a>
                                        <span class="text-gray-400 d-block fs-7">John Doe</span>
                                      </div>
                                    </div>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="text-gray-600 ">$74,000</span>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="badge badge-light-success fs-base">
                                      <i class="bi bi-arrow-up fs-5 text-success ms-n1"></i>
                                      9.2%
                                    </span>
                                  </td>
    
                                  <td class="text-end pe-12">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                  </td>
    
                                  <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px"> <i class="bi bi-arrow-right fs-2 text-gray-500"></i> </a>
                                  </td>
                                </tr>
    
                                <tr>
                                  <td>
                                    <div class="d-flex align-items-center">
                                      <div class="symbol symbol-50px me-3">
                                        <img src="assets/media/images/task-4.png" class="" alt="image" />
                                      </div>
    
                                      <div class="d-flex justify-content-start flex-column">
                                        <a href="#" class="text-gray-600 text-hover-primary mb-1 ">Project 5</a>
                                        <span class="text-gray-400 d-block fs-7">John Doe</span>
                                      </div>
                                    </div>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="text-gray-600 ">$183,300</span>
                                  </td>
    
                                  <td class="text-end pe-0">
                                    <span class="badge badge-light-danger fs-base">
                                      <i class="bi bi-arrow-down fs-5 text-danger ms-n1"></i>
                                      0.4%
                                    </span>
                                  </td>
    
                                  <td class="text-end pe-12">
                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">In Process</span>
                                  </td>
    
                                  <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px"> <i class="bi bi-arrow-right fs-2 text-gray-500"></i> </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>

                    </div>                  
                   


                  </div>
                </div>
@endsection

<script>
    var hostUrl = "assets/";
</script>

<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

<script type="text/javascript">
   
</script>
