@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')


<div id="kt_app_content_container" class="app-container container-xxl">
                  <div class="card mb-2 mt-4">
                    <div class="card-body pt-9 pb-0">
                      <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                        <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                          <img class="mw-50px mw-lg-75px" src="assets/media/avatars/1.png" alt="image" />
                        </div>

                        <div class="flex-grow-1">
                          <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <div class="d-flex flex-column">
                              <div class="d-flex align-items-center mb-1">
                                <a href="#" class="text-gray-800 text-hover-primary fs-2 me-3">Task Dashboard</a>
                                <span class="badge badge-light-success me-auto">In Progress</span>
                              </div>

                              <div class="d-flex flex-wrap mb-4 fs-5 text-gray-400">
                                #1 Tool to get started with Web Apps any Kind & size
                              </div>
                            </div>

                            <div class="d-flex mb-4">
                              <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>

                              <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Task</a>

                            </div>
                          </div>

                          <div class="d-flex flex-wrap justify-content-start">
                            <div class="d-flex flex-wrap">
                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                  <div class="fs-4">29 Jan, 2023</div>
                                </div>

                                <div class="fs-6 text-gray-400">Due Date</div>
                              </div>

                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                  <i class="bi bi-arrow-down fs-3 text-danger me-2"></i>
                                  <div class="fs-4" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                </div>

                                <div class="fs-6 text-gray-400">Open Tasks</div>
                              </div>

                              <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                  <i class="bi bi-arrow-up fs-3 text-success me-2"></i>
                                  <div class="fs-4" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
                                </div>

                                <div class="fs-6 text-gray-400">Budget Spent</div>
                              </div>
                            </div>

                            <div class="symbol-group symbol-hover mb-3">
                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning">A</span>
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/1.jpg" />
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                <img alt="Pic" src="assets/media/avatars/2.jpg" />
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                <img alt="Pic" src="assets/media/avatars/3.jpg" />
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary">S</span>
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/2.jpg" />
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                <span class="symbol-label bg-info text-inverse-info">P</span>
                              </div>

                              <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/1.jpg" />
                              </div>

                              <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-inverse-dark fs-8" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="separator"></div>
                      <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5">
                        <li class="nav-item">
                          <a class="nav-link text-active-primary py-5 me-6 active" href="#tab-overview" data-bs-toggle="tab" role="tab">Overview</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link text-active-primary py-5 me-6" href="#tab-tasks" data-bs-toggle="tab" role="tab">Tasks</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link text-active-primary py-5 me-6" href="#tab-budget" data-bs-toggle="tab" role="tab">Budget</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link text-active-primary py-5 me-6" href="#tab-activity" data-bs-toggle="tab" role="tab">Activity</a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link text-active-primary py-5 me-6" href="#tab-settings" data-bs-toggle="tab" role="tab">Settings</a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-overview" role="tabpanel">
                      <div class="row gx-6 gx-xl-9 py-4">
                        <div class="col-lg-6">
                          <div class="card card-flush h-lg-100">
                            <div class="card-header mt-6">
                              <div class="card-title flex-column">
                                <h3 class="mb-1">Tasks Summary</h3>

                                <div class="fs-6 text-gray-400">24 Overdue Tasks</div>
                              </div>

                              <div class="card-toolbar">
                                <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                              </div>
                            </div>

                            <div class="card-body p-9 pt-5">
                              <div class="d-flex flex-wrap">
                                <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                                  <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                    <span class="fs-2qx">237</span>
                                    <span class="fs-6 text-gray-400">Total Tasks</span>
                                  </div>

                                  <canvas id="project_overview_chart"></canvas>
                                </div>

                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                  <div class="d-flex fs-6 align-items-center mb-3">
                                    <div class="bullet bg-primary me-3"></div>
                                    <div class="text-gray-400">Active</div>
                                    <div class="ms-auto text-gray-700">30</div>
                                  </div>

                                  <div class="d-flex fs-6 align-items-center mb-3">
                                    <div class="bullet bg-success me-3"></div>
                                    <div class="text-gray-400">Completed</div>
                                    <div class="ms-auto text-gray-700">45</div>
                                  </div>

                                  <div class="d-flex fs-6 align-items-center mb-3">
                                    <div class="bullet bg-danger me-3"></div>
                                    <div class="text-gray-400">Overdue</div>
                                    <div class="ms-auto text-gray-700">0</div>
                                  </div>

                                  <div class="d-flex fs-6 align-items-center">
                                    <div class="bullet bg-gray-300 me-3"></div>
                                    <div class="text-gray-400">Yet to start</div>
                                    <div class="ms-auto text-gray-700">25</div>
                                  </div>
                                </div>
                              </div>

                              <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                <div class="d-flex flex-stack flex-grow-1">
                                  <div class="">
                                    <div class="fs-6 text-gray-700"><a href="#" class="me-1">Invite New .NET Collaborators</a> to create great outstanding business to business .jsp modutr class scripts</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="card card-flush h-lg-100">
                            <div class="card-header mt-6">
                              <div class="card-title flex-column">
                                <h3 class="mb-1">Tasks Over Time</h3>

                                <div class="fs-6 d-flex text-gray-400 fs-6">
                                  <div class="d-flex align-items-center me-6">
                                    <span class="menu-bullet d-flex align-items-center me-2">
                                      <span class="bullet bg-success"></span>
                                    </span>
                                    Complete
                                  </div>

                                  <div class="d-flex align-items-center">
                                    <span class="menu-bullet d-flex align-items-center me-2">
                                      <span class="bullet bg-primary"></span>
                                    </span>
                                    Incomplete
                                  </div>
                                </div>
                              </div>

                              <div class="card-toolbar">
                                <select name="status" data-control="select2" data-hide-search="true" class="form-select  form-select-sm w-100px">
                                  <option value="1">2020 Q1</option>
                                  <option value="2">2020 Q2</option>
                                  <option value="3" selected>2020 Q3</option>
                                  <option value="4">2020 Q4</option>
                                </select>
                              </div>
                            </div>

                            <div class="card-body pt-10 pb-0 px-5">
                              <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px;"></div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                          <div class="card card-flush h-lg-100">
                            <div class="card-header mt-6">
                              <div class="card-title flex-column">
                                <h3 class="mb-1">What's on the road?</h3>

                                <div class="fs-6 text-gray-400">Total 482 participants</div>
                              </div>

                              <div class="card-toolbar">
                                <select name="status" data-control="select2" data-hide-search="true" class="form-select  form-select-sm w-100px">
                                  <option value="1" selected>Options</option>
                                  <option value="2">Option 1</option>
                                  <option value="3">Option 2</option>
                                  <option value="4">Option 3</option>
                                </select>
                              </div>
                            </div>

                            <div class="card-body p-9 pt-4">
                              <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                    <span class="opacity-50 fs-7">Su</span>
                                    <span class="fs-6">22</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                    <span class="opacity-50 fs-7">Mo</span>
                                    <span class="fs-6">23</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                    <span class="opacity-50 fs-7">Tu</span>
                                    <span class="fs-6">24</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                    <span class="opacity-50 fs-7">We</span>
                                    <span class="fs-6">25</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                    <span class="opacity-50 fs-7">Th</span>
                                    <span class="fs-6">26</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                    <span class="opacity-50 fs-7">Fr</span>
                                    <span class="fs-6">27</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                    <span class="opacity-50 fs-7">Sa</span>
                                    <span class="fs-6">28</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                    <span class="opacity-50 fs-7">Su</span>
                                    <span class="fs-6">29</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                    <span class="opacity-50 fs-7">Mo</span>
                                    <span class="fs-6">30</span>
                                  </a>
                                </li>

                                <li class="nav-item me-1">
                                  <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                    <span class="opacity-50 fs-7">Tu</span>
                                    <span class="fs-6">31</span>
                                  </a>
                                </li>
                              </ul>

                              <div class="tab-content">
                                <div id="kt_schedule_day_0" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        14:30 - 15:30

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Team Backlog Grooming Session </a>

                                      <div class="text-gray-400">Lead by <a href="#">Sean Bean</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        13:00 - 14:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Sales Pitch Proposal </a>

                                      <div class="text-gray-400">Lead by <a href="#">Kendell Trevor</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Sales Pitch Proposal </a>

                                      <div class="text-gray-400">Lead by <a href="#">Mark Randall</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        14:30 - 15:30

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Weekly Team Stand-Up </a>

                                      <div class="text-gray-400">Lead by <a href="#">Karina Clarke</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        12:00 - 13:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Weekly Team Stand-Up </a>

                                      <div class="text-gray-400">Lead by <a href="#">Yannis Gloverson</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        10:00 - 11:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Lunch & Learn Catch Up </a>

                                      <div class="text-gray-400">Lead by <a href="#">Terry Robins</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_2" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        11:00 - 11:45

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Development Team Capacity Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Michael Walters</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        11:00 - 11:45

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Marketing Campaign Discussion </a>

                                      <div class="text-gray-400">Lead by <a href="#">Sean Bean</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Sales Pitch Proposal </a>

                                      <div class="text-gray-400">Lead by <a href="#">Bob Harris</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_3" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> 9 Degree Project Estimation Meeting </a>

                                      <div class="text-gray-400">Lead by <a href="#">Naomi Hayabusa</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        13:00 - 14:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Dashboard UI/UX Design Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Kendell Trevor</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        13:00 - 14:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Weekly Team Stand-Up </a>

                                      <div class="text-gray-400">Lead by <a href="#">Naomi Hayabusa</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_4" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Lunch & Learn Catch Up </a>

                                      <div class="text-gray-400">Lead by <a href="#">Michael Walters</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        14:30 - 15:30

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Dashboard UI/UX Design Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Terry Robins</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        10:00 - 11:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Sales Pitch Proposal </a>

                                      <div class="text-gray-400">Lead by <a href="#">Mark Randall</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_5" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        11:00 - 11:45

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Sales Pitch Proposal </a>

                                      <div class="text-gray-400">Lead by <a href="#">Michael Walters</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        12:00 - 13:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Team Backlog Grooming Session </a>

                                      <div class="text-gray-400">Lead by <a href="#">David Stevenson</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Dashboard UI/UX Design Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Terry Robins</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_6" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Creative Content Initiative </a>

                                      <div class="text-gray-400">Lead by <a href="#">Karina Clarke</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Committee Review Approvals </a>

                                      <div class="text-gray-400">Lead by <a href="#">Terry Robins</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        11:00 - 11:45

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Creative Content Initiative </a>

                                      <div class="text-gray-400">Lead by <a href="#">Walter White</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_7" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        10:00 - 11:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Team Backlog Grooming Session </a>

                                      <div class="text-gray-400">Lead by <a href="#">Walter White</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        13:00 - 14:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Dashboard UI/UX Design Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Bob Harris</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        12:00 - 13:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Development Team Capacity Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Walter White</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_8" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Team Backlog Grooming Session </a>

                                      <div class="text-gray-400">Lead by <a href="#">Kendell Trevor</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        16:30 - 17:30

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Development Team Capacity Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Naomi Hayabusa</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        10:00 - 11:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Dashboard UI/UX Design Review </a>

                                      <div class="text-gray-400">Lead by <a href="#">Naomi Hayabusa</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>

                                <div id="kt_schedule_day_9" class="tab-pane fade show">
                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        9:00 - 10:00

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Creative Content Initiative </a>

                                      <div class="text-gray-400">Lead by <a href="#">Naomi Hayabusa</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        14:30 - 15:30

                                        <span class="fs-7 text-gray-400 text-uppercase"> pm </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> 9 Degree Project Estimation Meeting </a>

                                      <div class="text-gray-400">Lead by <a href="#">Bob Harris</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>

                                  <div class="d-flex flex-stack position-relative mt-8">
                                    <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>

                                    <div class="ms-5 text-gray-600">
                                      <div class="fs-5">
                                        11:00 - 11:45

                                        <span class="fs-7 text-gray-400 text-uppercase"> am </span>
                                      </div>

                                      <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2"> Team Backlog Grooming Session </a>

                                      <div class="text-gray-400">Lead by <a href="#">Caleb Donaldson</a></div>
                                    </div>

                                    <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                          <div class="card card-flush h-lg-100">
                            <div class="card-header mt-6">
                              <div class="card-title flex-column">
                                <h3 class="mb-1">Latest Files</h3>

                                <div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
                              </div>

                              <div class="card-toolbar">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                              </div>
                            </div>

                            <div class="card-body p-9 pt-3">
                              <div class="d-flex flex-column mb-9">
                                <div class="d-flex align-items-center mb-5">
                                  <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="assets/media/svg/files/pdf.svg" />
                                  </div>

                                  <div class="">
                                    <a class="fs-6 text-dark text-hover-primary" href="#">Project tech requirements</a>

                                    <div class="text-gray-400">2 days ago <a href="#">Karina Clark</a></div>
                                  </div>

                                  <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto">
                                    <i class="bi bi-plus fs-3"></i>
                                  </button>
                                </div>

                                <div class="d-flex align-items-center mb-5">
                                  <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="assets/media/svg/files/doc.svg" />
                                  </div>

                                  <div class="">
                                    <a class="fs-6 text-dark text-hover-primary" href="#">Create FureStibe branding proposal</a>

                                    <div class="text-gray-400">Due in 1 day <a href="#">Marcus Blake</a></div>
                                  </div>

                                  <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" >
                                    <i class="bi bi-plus fs-3"></i>
                                  </button>

                                </div>

                                <div class="d-flex align-items-center mb-5">
                                  <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="assets/media/svg/files/css.svg" />
                                  </div>

                                  <div class="">
                                    <a class="fs-6 text-dark text-hover-primary" href="#">Completed Project Stylings</a>

                                    <div class="text-gray-400">Due in 1 day <a href="#">Terry Barry</a></div>
                                  </div>

                                  <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto">
                                    <i class="bi bi-plus fs-3"></i>
                                  </button>

                                  <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248b89">
                                    <div class="px-7 py-5">
                                      <div class="fs-5 text-dark">Filter Options</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <div class="px-7 py-5">
                                      <div class="mb-10">
                                        <label class="form-label">Status:</label>

                                        <div>
                                          <select
                                            class="form-select "
                                            multiple
                                            data-kt-select2="true"
                                            data-close-on-select="false"
                                            data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_64b5690248b89"
                                            data-allow-clear="true"
                                          >
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="mb-10">
                                        <label class="form-label">Member Type:</label>

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
                                        <label class="form-label">Notifications:</label>

                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                          <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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

                                <div class="d-flex align-items-center">
                                  <div class="symbol symbol-30px me-5">
                                    <img alt="Icon" src="assets/media/svg/files/ai.svg" />
                                  </div>

                                  <div class="">
                                    <a class="fs-6 text-dark text-hover-primary" href="#">Create Project Wireframes</a>

                                    <div class="text-gray-400">Due in 3 days <a href="#">Roth Bloom</a></div>
                                  </div>

                                  <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-3"></i>
                                  </button>

                                  <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248b94">
                                    <div class="px-7 py-5">
                                      <div class="fs-5 text-dark">Filter Options</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <div class="px-7 py-5">
                                      <div class="mb-10">
                                        <label class="form-label">Status:</label>

                                        <div>
                                          <select
                                            class="form-select "
                                            multiple
                                            data-kt-select2="true"
                                            data-close-on-select="false"
                                            data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_64b5690248b94"
                                            data-allow-clear="true"
                                          >
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                          </select>
                                        </div>
                                      </div>

                                      <div class="mb-10">
                                        <label class="form-label">Member Type:</label>

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
                                        <label class="form-label">Notifications:</label>

                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                          <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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

                              <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                <i class="bi bi-svg/files/upload.svg fs-2tx text-primary me-4"></i>

                                <div class="d-flex flex-stack flex-grow-1">
                                  <div class="">
                                    <h4 class="text-gray-900">Quick file uploader</h4>

                                    <div class="fs-6 text-gray-700">Drag & Drop or choose files from computer</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                          <div class="card card-flush h-lg-100">
                            <div class="card-header mt-6">
                              <div class="card-title flex-column">
                                <h3 class="mb-1">New Contibutors</h3>

                                <div class="fs-6 text-gray-400">From total 482 Participants</div>
                              </div>

                              <div class="card-toolbar">
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                              </div>
                            </div>

                            <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                              <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                  <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                  </div>
                                </div>

                                <div class="">
                                  <a href="#" class="fs-5 text-gray-900 text-hover-primary">Emma Smith</a>

                                  <div class="text-gray-400">
                                    8 Pending & 97 Completed Tasks
                                  </div>
                                </div>

                                <div class="badge badge-light ms-auto">5</div>
                              </div>

                              <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                  <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger"> M </span>
                                  </div>

                                  <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                </div>

                                <div class="">
                                  <a href="#" class="fs-5 text-gray-900 text-hover-primary">Melody Macy</a>

                                  <div class="text-gray-400">
                                    5 Pending & 84 Completed
                                  </div>
                                </div>

                                <div class="badge badge-light ms-auto">8</div>
                              </div>

                              <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                  <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                  </div>
                                </div>

                                <div class="">
                                  <a href="#" class="fs-5 text-gray-900 text-hover-primary">Max Smith</a>

                                  <div class="text-gray-400">
                                    9 Pending & 103 Completed
                                  </div>
                                </div>

                                <div class="badge badge-light ms-auto">9</div>
                              </div>

                              <div class="d-flex align-items-center mb-5">
                                <div class="me-5 position-relative">
                                  <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                  </div>
                                </div>

                                <div class="">
                                  <a href="#" class="fs-5 text-gray-900 text-hover-primary">Sean Bean</a>

                                  <div class="text-gray-400">
                                    3 Pending & 55 Completed
                                  </div>
                                </div>

                                <div class="badge badge-light ms-auto">3</div>
                              </div>

                              <div class="d-flex align-items-center">
                                <div class="me-5 position-relative">
                                  <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                  </div>
                                </div>

                                <div class="">
                                  <a href="#" class="fs-5 text-gray-900 text-hover-primary">Brian Cox</a>

                                  <div class="text-gray-400">
                                    4 Pending & 115 Completed
                                  </div>
                                </div>

                                <div class="badge badge-light ms-auto">4</div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6 mt-4">
                          <div class="card card-flush h-lg-100">
                            <div class="card-header mt-6">
                              <div class="card-title flex-column">
                                <h3 class="mb-1">My Tasks</h3>

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

                                <div class="">
                                  <a href="#" class="fs-6 text-gray-900 text-hover-primary">Create FureStibe branding logo</a>

                                  <div class="text-gray-400">Due in 1 day <a href="#">Karina Clark</a></div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                  <i class="bi bi-plus fs-3"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248bdb">
                                  <div class="px-7 py-5">
                                    <div class="fs-5 text-dark">Filter Options</div>
                                  </div>

                                  <div class="separator border-gray-200"></div>

                                  <div class="px-7 py-5">
                                    <div class="mb-10">
                                      <label class="form-label">Status:</label>

                                      <div>
                                        <select
                                          class="form-select "
                                          multiple
                                          data-kt-select2="true"
                                          data-close-on-select="false"
                                          data-placeholder="Select option"
                                          data-dropdown-parent="#kt_menu_64b5690248bdb"
                                          data-allow-clear="true"
                                        >
                                          <option></option>
                                          <option value="1">Approved</option>
                                          <option value="2">Pending</option>
                                          <option value="2">In Process</option>
                                          <option value="2">Rejected</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="mb-10">
                                      <label class="form-label">Member Type:</label>

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
                                      <label class="form-label">Notifications:</label>

                                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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

                                <div class="">
                                  <a href="#" class="fs-6 text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>

                                  <div class="text-gray-400">Due in 3 days <a href="#">Rober Doe</a></div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                  <i class="bi bi-plus fs-3"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248bec">
                                  <div class="px-7 py-5">
                                    <div class="fs-5 text-dark">Filter Options</div>
                                  </div>

                                  <div class="separator border-gray-200"></div>

                                  <div class="px-7 py-5">
                                    <div class="mb-10">
                                      <label class="form-label">Status:</label>

                                      <div>
                                        <select
                                          class="form-select "
                                          multiple
                                          data-kt-select2="true"
                                          data-close-on-select="false"
                                          data-placeholder="Select option"
                                          data-dropdown-parent="#kt_menu_64b5690248bec"
                                          data-allow-clear="true"
                                        >
                                          <option></option>
                                          <option value="1">Approved</option>
                                          <option value="2">Pending</option>
                                          <option value="2">In Process</option>
                                          <option value="2">Rejected</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="mb-10">
                                      <label class="form-label">Member Type:</label>

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
                                      <label class="form-label">Notifications:</label>

                                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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

                                <div class="">
                                  <a href="#" class="fs-6 text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>

                                  <div class="text-gray-400">Due in 1 week <a href="#">Neil Owen</a></div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                  <i class="bi bi-plus fs-3"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248c00">
                                  <div class="px-7 py-5">
                                    <div class="fs-5 text-dark">Filter Options</div>
                                  </div>

                                  <div class="separator border-gray-200"></div>

                                  <div class="px-7 py-5">
                                    <div class="mb-10">
                                      <label class="form-label">Status:</label>

                                      <div>
                                        <select
                                          class="form-select "
                                          multiple
                                          data-kt-select2="true"
                                          data-close-on-select="false"
                                          data-placeholder="Select option"
                                          data-dropdown-parent="#kt_menu_64b5690248c00"
                                          data-allow-clear="true"
                                        >
                                          <option></option>
                                          <option value="1">Approved</option>
                                          <option value="2">Pending</option>
                                          <option value="2">In Process</option>
                                          <option value="2">Rejected</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="mb-10">
                                      <label class="form-label">Member Type:</label>

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
                                      <label class="form-label">Notifications:</label>

                                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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

                                <div class="">
                                  <a href="#" class="fs-6 text-gray-900 text-hover-primary">Dashgboard UI & UX for Leafr CRM</a>

                                  <div class="text-gray-400">Due in 1 week <a href="#">Olivia Wild</a></div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                  <i class="bi bi-plus fs-3"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248c0f">
                                  <div class="px-7 py-5">
                                    <div class="fs-5 text-dark">Filter Options</div>
                                  </div>

                                  <div class="separator border-gray-200"></div>

                                  <div class="px-7 py-5">
                                    <div class="mb-10">
                                      <label class="form-label">Status:</label>

                                      <div>
                                        <select
                                          class="form-select "
                                          multiple
                                          data-kt-select2="true"
                                          data-close-on-select="false"
                                          data-placeholder="Select option"
                                          data-dropdown-parent="#kt_menu_64b5690248c0f"
                                          data-allow-clear="true"
                                        >
                                          <option></option>
                                          <option value="1">Approved</option>
                                          <option value="2">Pending</option>
                                          <option value="2">In Process</option>
                                          <option value="2">Rejected</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="mb-10">
                                      <label class="form-label">Member Type:</label>

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
                                      <label class="form-label">Notifications:</label>

                                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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

                                <div class="">
                                  <a href="#" class="fs-6 text-gray-900 text-hover-primary">Mivy App R&D, Meeting with clients</a>

                                  <div class="text-gray-400">Due in 2 weeks <a href="#">Sean Bean</a></div>
                                </div>

                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                  <i class="bi bi-plus fs-3"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b5690248c1b">
                                  <div class="px-7 py-5">
                                    <div class="fs-5 text-dark">Filter Options</div>
                                  </div>

                                  <div class="separator border-gray-200"></div>

                                  <div class="px-7 py-5">
                                    <div class="mb-10">
                                      <label class="form-label">Status:</label>

                                      <div>
                                        <select
                                          class="form-select "
                                          multiple
                                          data-kt-select2="true"
                                          data-close-on-select="false"
                                          data-placeholder="Select option"
                                          data-dropdown-parent="#kt_menu_64b5690248c1b"
                                          data-allow-clear="true"
                                        >
                                          <option></option>
                                          <option value="1">Approved</option>
                                          <option value="2">Pending</option>
                                          <option value="2">In Process</option>
                                          <option value="2">Rejected</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="mb-10">
                                      <label class="form-label">Member Type:</label>

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
                                      <label class="form-label">Notifications:</label>

                                      <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
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
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab-tasks" role="tabpanel">


                      <div class="card card-custom gutter-b">
                        <div class="card-header">
                          <div class="card-title">
                            <h3 class="card-label">
                              Task Board
                            </h3>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="d-flex flex-wrap flex-stack pt-10 pb-8">
                            <h3 class="my-2">
                              Tasks
                              <span class="fs-6 text-gray-400 ms-1">by Recent Updates ↓</span>
                            </h3>
    
                            <div class="d-flex flex-wrap my-1">
                              <div class="search me-2">
                                <i class="bi bi-search search-icon fs-2 text-gray-500"></i>
                                <input type="text" id="search-input" class="search-input form-control ps-13" name="search" value="" placeholder="Search Task...">

                              </div>
                              
                              <button class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary mb-1 add-task-board w-200px" >
                                <i class="bi bi-plus fs-2"></i> Add New Board
                              </button>
                           
    
                            </div>
                          </div>
    
                        <div class="container py-4" style="background-color: #E5E5E5; border-radius: 10px">
                            <div class="board" >
                                <div class="btn-board">
                                </div>
                    
                            </div>
                    
                        </div>
                        <div class="popup" id="new-task">
                            <div class="popup-content">
                                <div class="d-flex heading">
                                    <h4>
                                        New Tasks
                                    </h4>
                                    <span class="close">
                                        <svg height="14px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="14px"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0" />
                                            <path
                                                d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0" />
                                        </svg>
                                    </span>
                                </div>
                                <form action="" id="add-task">
                                    <label for="">Title</label>
                                    <input type="text" name="title" autocomplete="off">
                                    <label for="">Description</label>
                                    <textarea name="desc" id="" cols="30" rows="10"></textarea>
                    
                                    <label for="">Priority</label>
                                    <select name="priority" id="">
                                        <option value="low">
                                            Low
                                        </option>
                                        <option value="medium">
                                            Medium
                                        </option>
                                        <option value="high">
                                            High
                                        </option>
                                    </select>
                                </form>
                                <div class="footer">
                                    <button class="primary" id="bt-task">
                                        Add
                                    </button>
                                    <button class="close">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>



                        
                        <div class="popup" id="edit-task">
                            <div class="popup-content">
                                <div class="d-flex heading">
                                    <h4>
                                        Edit Tasks
                                    </h4>
                                    <span class="close">
                                        <svg height="14px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="14px"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0" />
                                            <path
                                                d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0" />
                                        </svg>
                                    </span>
                                </div>
                                <form action="" id="editfrm-task">
                                    <label for="">Title</label>
                                    <input type="text" name="title" autocomplete="off">
                                    <label for="">Description</label>
                                    <textarea name="desc" id="" cols="30" rows="10"></textarea>
                    
                                    <label for="">Priority</label>
                                    <select name="priority" id="">
                                        <option value="low">
                                            Low
                                        </option>
                                        <option value="medium">
                                            Medium
                                        </option>
                                        <option value="high">
                                            High
                                        </option>
                                    </select>
                                </form>
                                <div class="footer">
                                    <button class="primary" id="update-task">
                                       Update
                                    </button>
                                    <button class="close">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    
                    
                        <div class="popup" id="new-task-board">
                            <div class="popup-content">
                                <div class="d-flex heading">
                                    <h4>
                                        New Tasks board
                                    </h4>
                                    <span class="close">
                                        <svg height="14px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="14px"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0" />
                                            <path
                                                d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0" />
                                        </svg>
                                    </span>
                                </div>
                                <form action="" id="add-task-board">
                                    <label for="">Title</label>
                                    <input type="text" name="task-board-title" autocomplete="off">
                                </form>
                                <div class="footer">
                                    <button class="primary" id="bt-task-board">
                                        Add
                                    </button>
                                    <button  class="close">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </div>

                        </div>
                     
                      </div>

                      <div id="kt_project_tasks_table_pane" class="tab-pane fade" role="tabpanel">
                        <div class="card card-flush">
                          <div class="card-body pt-3">
                            <div id="project_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="table-responsive">
                                <table id="project_table" class="table table-row-bordered table-row-dashed gy-4 align-middle dataTable no-footer">
                                  <thead class="fs-7 text-gray-400 text-uppercase">
                                    <tr>
                                      <th class="min-w-250px sorting" tabindex="0" aria-controls="project_table" rowspan="1" colspan="1" aria-label="Target: activate to sort column ascending" style="width: 0px;">
                                        Target
                                      </th>
                                      <th class="min-w-90px sorting" tabindex="0" aria-controls="project_table" rowspan="1" colspan="1" aria-label="Section: activate to sort column ascending" style="width: 0px;">
                                        Section
                                      </th>
                                      <th class="min-w-150px sorting" tabindex="0" aria-controls="project_table" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 0px;">
                                        Due Date
                                      </th>
                                      <th class="min-w-90px sorting" tabindex="0" aria-controls="project_table" rowspan="1" colspan="1" aria-label="Members: activate to sort column ascending" style="width: 0px;">
                                        Members
                                      </th>
                                      <th class="min-w-90px sorting" tabindex="0" aria-controls="project_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 0px;">
                                        Status
                                      </th>
                                      <th class="min-w-50px sorting" tabindex="0" aria-controls="project_table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending" style="width: 0px;"></th>
                                    </tr>
                                  </thead>
                                  <tbody class="fs-6">
                                    <tr class="odd">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">UI Design</span></td>
                                      <td>Sep 27, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="John Mixin" data-bs-original-title="John Mixin" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                            <span class="symbol-label bg-primary text-inverse-primary">S</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light-primary me-auto">In Progress</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="even">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">Phase 2.6 QA</span></td>
                                      <td>Sep 6, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                            <span class="symbol-label bg-warning text-inverse-warning">A</span>
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Robin Watterman" data-kt-initialized="1">
                                            <span class="symbol-label bg-success text-inverse-success">R</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light-success me-auto">Completed</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="odd">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">Sales report page</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">QA</span></td>
                                      <td>Mar 10, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Kristen Goodwin" data-bs-original-title="Kristen Goodwin" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Mikaela Collins" data-kt-initialized="1">
                                            <span class="symbol-label bg-info text-inverse-info">M</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light me-auto">Yet to start</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="even">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">Meeting with customer</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">Prototype</span></td>
                                      <td>Oct 23, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Robin Watterman" data-kt-initialized="1">
                                            <span class="symbol-label bg-success text-inverse-success">R</span>
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Brian Cox" data-bs-original-title="Brian Cox" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light-success me-auto">Completed</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="odd">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">Design main Dashboard</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">UI Design</span></td>
                                      <td>Jul 14, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Emma Smith" data-bs-original-title="Emma Smith" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Lucy Matthews" data-bs-original-title="Lucy Matthews" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light-success me-auto">Completed</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="even">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">User Module Testing</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">Development</span></td>
                                      <td>Jun 24, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Deanna Taylor" data-bs-original-title="Deanna Taylor" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Mikaela Collins" data-kt-initialized="1">
                                            <span class="symbol-label bg-info text-inverse-info">M</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light-primary me-auto">In Progress</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="odd">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">To check User Management</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">Pahse 3.2</span></td>
                                      <td>Jan 21, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Lucy Matthews" data-bs-original-title="Lucy Matthews" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Kristen Goodwin" data-bs-original-title="Kristen Goodwin" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light me-auto">Yet to start</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                    <tr class="even">
                                      <td class=""><a href="#" class="text-gray-900 text-hover-primary">Create Roles Module</a></td>
                                      <td data-order="Invalid date"><span class="badge badge-light me-auto">Branding</span></td>
                                      <td>Oct 1, 2020</td>
                                      <td>
                                        <div class="symbol-group symbol-hover fs-8">
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Robin Watterman" data-kt-initialized="1">
                                            <span class="symbol-label bg-success text-inverse-success">R</span>
                                          </div>
                                          <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                            <span class="symbol-label bg-warning text-inverse-warning">A</span>
                                          </div>
                                        </div>
                                      </td>
                                      <td><span class="badge badge-light me-auto">Yet to start</span></td>
                                      <td class="text-end"><a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                                <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab-budget" role="tabpanel">
                      <div class="row py-4">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title fs-3">Project Budget</h3>
                          </div>

                          <div class="card-body">
                            <div class="row mb-8">
                              <div class="col-xl-3">
                                <div class="fs-6 mt-2 mb-3">Current Status</div>
                              </div>

                              <div class="col-xl-9">
                                <div class="d-flex flex-column">
                                  <div class="d-flex justify-content-between w-100 fs-4 mb-3">
                                    <span>Budget</span>
                                    <span>$22,300 of 36,000 Used</span>
                                  </div>

                                  <div class="h-8px bg-light rounded mb-3">
                                    <div class="bg-success rounded h-8px" role="progressbar" style="width: 68%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>

                                  <div class="text-gray-600">14 tasks are remaining</div>
                                </div>
                              </div>
                            </div>

                            <div class="row mb-8">
                              <div class="col-xl-3">
                                <div class="fs-6 mt-2 mb-3">Usage Character</div>
                              </div>

                              <div class="col-xl-9">
                                <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]" data-kt-initialized="1">
                                  <div class="col-md-4 col-lg-12 col-xxl-4">
                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                      <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input" type="radio" name="usage" value="1" checked="checked" />
                                      </span>

                                      <span class="ms-5">
                                        <span class="fs-4 mb-1 d-block">Precise Usage</span>
                                        <span class="fs-7 text-gray-600">
                                          Withdraw money to your bank account per transaction under $50,000 budget
                                        </span>
                                      </span>
                                    </label>
                                  </div>

                                  <div class="col-md-4 col-lg-12 col-xxl-4">
                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                      <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input" type="radio" name="usage" value="2" />
                                      </span>

                                      <span class="ms-5">
                                        <span class="fs-4 mb-1 d-block">Normal Usage</span>
                                        <span class="fs-7 text-gray-600">
                                          Withdraw money to your bank account per transaction under $50,000 budget
                                        </span>
                                      </span>
                                    </label>
                                  </div>

                                  <div class="col-md-4 col-lg-12 col-xxl-4">
                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                      <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                        <input class="form-check-input" type="radio" name="usage" value="3" />
                                      </span>

                                      <span class="ms-5">
                                        <span class="fs-4 mb-1 d-block">Extreme Usage</span>
                                        <span class="fs-7 text-gray-600">
                                          Withdraw money to your bank account per transaction under $50,000 budget
                                        </span>
                                      </span>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row mb-8">
                              <div class="col-xl-3">
                                <div class="fs-6 mt-2 mb-3">Budget Notes</div>
                              </div>

                              <div class="col-xl-9">
                                <textarea name="notes" class="form-control " rows="5">
                        Organize your thoughts with an outline. Here’s the outlining strategy I use. 
                                                                            I promise it works like a charm. Not only will it make writing your blog post easier, it’ll help you make your message


                                </textarea>
                              </div>
                            </div>

                            <div class="row mb-8">
                              <div class="col-xl-3">
                                <div class="fs-6 mt-2 mb-3">Manage Budget</div>
                              </div>

                              <div class="col-xl-9">
                                <div class="position-relative w-md-300px" data-kt-dialer="true" data-kt-dialer-min="1000" data-kt-dialer-max="50000" data-kt-dialer-step="1000" data-kt-dialer-prefix="$" data-kt-dialer-decimals="2">
                                  <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                    <i class="bi bi-minus fs-1"></i>
                                  </button>

                                  <input type="text" class="form-control  border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="manageBudget" readonly="" value="$36,000.00" />

                                  <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                    <i class="bi bi-plus fs-1"></i>
                                  </button>
                                </div>
                              </div>
                            </div>

                            <div class="row mb-8">
                              <div class="col-xl-3">
                                <div class="fs-6 mt-2 mb-3">Overuse Notifications</div>
                              </div>

                              <div class="col-xl-9">
                                <div class="d-flex h-100">
                                  <div class="form-check form-check-custom form-check-solid me-9">
                                    <input class="form-check-input" type="checkbox" value="" id="email" />
                                    <label class="form-check-label ms-3" for="email">
                                      Email
                                    </label>
                                  </div>

                                  <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" id="phone" checked="checked" />
                                    <label class="form-check-label ms-3" for="phone">
                                      Phone
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-xl-3">
                                <div class="fs-6 mt-2 mb-3">Allow Changes</div>
                              </div>

                              <div class="col-xl-9">
                                <div class="form-check form-switch form-check-custom form-check-solid">
                                  <input class="form-check-input" type="checkbox" value="" id="allowchanges" checked="checked" />
                                  <label class="form-check-label text-gray-400 ms-3" for="allowchanges">
                                    Allowed
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card-footer d-flex justify-content-end py-6">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>

                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab-activity" role="tabpanel">
                      <div class="row py-4">
                        <div class="card">
                          <div class="card-header card-header-stretch">
                            <div class="card-title d-flex align-items-center">
                              <i class="bi bi-calendar-8 fs-1 text-primary me-3 lh-0"></i>

                              <h3 class="m-0 text-gray-800">Jan 23, 2023</h3>
                            </div>

                            <div class="card-toolbar m-0">
                              <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today" aria-selected="true">
                                    Today
                                  </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week" aria-selected="false" tabindex="-1">
                                    Week
                                  </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month" aria-selected="false" tabindex="-1">
                                    Month
                                  </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year" aria-selected="false" tabindex="-1">
                                    2023
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>

                          <div class="card-body">
                            <div class="tab-content">
                              <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                <div class="timeline">
                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-chat-text fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/3.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                          <a href="user-project.html" class="fs-5 text-dark text-hover-primary w-375px min-w-200px">
                                            Meeting with customer
                                          </a>

                                          <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                          </div>

                                          <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <div class="symbol symbol-circle symbol-25px">
                                              <img src="assets/media/avatars/1.jpg" alt="img" />
                                            </div>

                                            <div class="symbol symbol-circle symbol-25px">
                                              <img src="assets/media/avatars/3.jpg" alt="img" />
                                            </div>

                                            <div class="symbol symbol-circle symbol-25px">
                                              <div class="symbol-label fs-8 bg-primary text-inverse-primary">A</div>
                                            </div>
                                          </div>

                                          <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                          </div>

                                          <a href="user-project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        </div>

                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                          <a href="user-project.html" class="fs-5 text-dark text-hover-primary w-375px min-w-200px">
                                            Project Delivery Preparation
                                          </a>

                                          <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                          </div>

                                          <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <div class="symbol symbol-circle symbol-25px">
                                              <img src="assets/media/avatars/3.jpg" alt="img" />
                                            </div>

                                            <div class="symbol symbol-circle symbol-25px">
                                              <div class="symbol-label fs-8 bg-success text-inverse-primary">B</div>
                                            </div>
                                          </div>

                                          <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                          </div>

                                          <a href="user-project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-flag fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n2">
                                      <div class="overflow-auto pe-3">
                                        <div class="fs-5 mb-2">Invitation for crafting engaging designs that speak human workshop</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Alan Nilson"
                                            data-bs-original-title="Alan Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-gear-wide-connected fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="mb-5 pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Jan Hummer"
                                            data-bs-original-title="Jan Hummer"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />

                                            <div class="ms-1">
                                              <a href="user-project.html" class="fs-6 text-hover-primary">Finance KPI App Guidelines</a>

                                              <div class="text-gray-400">1.9mb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Client UAT Testing Results</a>

                                              <div class="text-gray-400">18kb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Finance Reports</a>

                                              <div class="text-gray-400">20mb</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-abstract-26 fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">Task <a href="#" class="text-primary me-1">#45890</a> merged with <a href="#" class="text-primary me-1">#45890</a> in “Ads Pro Admin Dashboard project:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/3.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-pencil fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">3 new application design concepts added:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Marcus Dotson"
                                            data-bs-original-title="Marcus Dotson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-person fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New case <a href="#" class="text-primary me-1">#67890</a>
                                          is assigned to you in Multi-platform Database Design project
                                        </div>

                                        <div class="overflow-auto pb-5">
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

                                            <a href="#" class="text-primary me-1">Alice Tan</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-pencil fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">You have received a new order:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Robert Rich"
                                            data-bs-original-title="Robert Rich"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/2.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                          <i class="bi bi-devices-2 fs-2tx text-primary me-4"></i>

                                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <div class="mb-3 mb-md-0">
                                              <h4 class="text-gray-900">Database Backup Process Completed!</h4>

                                              <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                            </div>

                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"> Proceed </a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-basket fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New order <a href="#" class="text-primary me-1">#67890</a>
                                          is placed for Workshow Planning &amp; Budget Estimation
                                        </div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>

                                          <a href="#" class="text-primary me-1">Jimmy Bold</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
                                <div class="timeline">
                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-flag fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n2">
                                      <div class="overflow-auto pe-3">
                                        <div class="fs-5 mb-2">Invitation for crafting engaging designs that speak human workshop</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Alan Nilson"
                                            data-bs-original-title="Alan Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-gear-wide-connected fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="mb-5 pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Jan Hummer"
                                            data-bs-original-title="Jan Hummer"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />

                                            <div class="ms-1">
                                              <a href="user-project.html" class="fs-6 text-hover-primary">Finance KPI App Guidelines</a>

                                              <div class="text-gray-400">1.9mb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Client UAT Testing Results</a>

                                              <div class="text-gray-400">18kb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Finance Reports</a>

                                              <div class="text-gray-400">20mb</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-pencil fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">Task <a href="#" class="text-primary me-1">#45890</a> merged with <a href="#" class="text-primary me-1">#45890</a> in “Ads Pro Admin Dashboard project:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/3.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-pencil fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">3 new application design concepts added:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Marcus Dotson"
                                            data-bs-original-title="Marcus Dotson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-sms fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New case <a href="#" class="text-primary me-1">#67890</a>
                                          is assigned to you in Multi-platform Database Design project
                                        </div>

                                        <div class="overflow-auto pb-5">
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

                                            <a href="#" class="text-primary me-1">Alice Tan</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
                                <div class="timeline">
                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-pencil fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">3 new application design concepts added:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Marcus Dotson"
                                            data-bs-original-title="Marcus Dotson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-sms fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New case <a href="#" class="text-primary me-1">#67890</a>
                                          is assigned to you in Multi-platform Database Design project
                                        </div>

                                        <div class="overflow-auto pb-5">
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

                                            <a href="#" class="text-primary me-1">Alice Tan</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-basket fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New order <a href="#" class="text-primary me-1">#67890</a>
                                          is placed for Workshow Planning &amp; Budget Estimation
                                        </div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>

                                          <a href="#" class="text-primary me-1">Jimmy Bold</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-flag fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n2">
                                      <div class="overflow-auto pe-3">
                                        <div class="fs-5 mb-2">Invitation for crafting engaging designs that speak human workshop</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Alan Nilson"
                                            data-bs-original-title="Alan Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-gear-wide-connected fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="mb-5 pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Jan Hummer"
                                            data-bs-original-title="Jan Hummer"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />

                                            <div class="ms-1">
                                              <a href="user-project.html" class="fs-6 text-hover-primary">Finance KPI App Guidelines</a>

                                              <div class="text-gray-400">1.9mb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Client UAT Testing Results</a>

                                              <div class="text-gray-400">18kb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Finance Reports</a>

                                              <div class="text-gray-400">20mb</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-abstract-26 fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">Task <a href="#" class="text-primary me-1">#45890</a> merged with <a href="#" class="text-primary me-1">#45890</a> in “Ads Pro Admin Dashboard project:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/3.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
                                <div class="timeline">
                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-gear-wide-connected fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="mb-5 pe-3">
                                        <a href="#" class="fs-5 text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Jan Hummer"
                                            data-bs-original-title="Jan Hummer"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />

                                            <div class="ms-1">
                                              <a href="user-project.html" class="fs-6 text-hover-primary">Finance KPI App Guidelines</a>

                                              <div class="text-gray-400">1.9mb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Client UAT Testing Results</a>

                                              <div class="text-gray-400">18kb</div>
                                            </div>
                                          </div>

                                          <div class="d-flex flex-aligns-center">
                                            <img alt="user-project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />

                                            <div class="ms-1">
                                              <a href="#" class="fs-6 text-hover-primary">Finance Reports</a>

                                              <div class="text-gray-400">20mb</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-abstract-26 fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">Task <a href="#" class="text-primary me-1">#45890</a> merged with <a href="#" class="text-primary me-1">#45890</a> in “Ads Pro Admin Dashboard project:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Nina Nilson"
                                            data-bs-original-title="Nina Nilson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/3.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-pencil fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">3 new application design concepts added:</div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>

                                          <div
                                            class="symbol symbol-circle symbol-25px"
                                            data-bs-toggle="tooltip"
                                            data-bs-boundary="window"
                                            data-bs-placement="top"
                                            aria-label="Marcus Dotson"
                                            data-bs-original-title="Marcus Dotson"
                                            data-kt-initialized="1"
                                          >
                                            <img src="assets/media/avatars/1.jpg" alt="img" />
                                          </div>
                                        </div>
                                      </div>

                                      <div class="overflow-auto pb-5">
                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay me-10">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>

                                          <div class="overlay">
                                            <div class="overlay-wrapper">
                                              <img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
                                            </div>

                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                              <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-sms fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New case <a href="#" class="text-primary me-1">#67890</a>
                                          is assigned to you in Multi-platform Database Design project
                                        </div>

                                        <div class="overflow-auto pb-5">
                                          <div class="d-flex align-items-center mt-1 fs-6">
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>

                                            <a href="#" class="text-primary me-1">Alice Tan</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>

                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                      <div class="symbol-label bg-light">
                                        <i class="bi bi-basket fs-2 text-gray-500"></i>
                                      </div>
                                    </div>

                                    <div class="timeline-content mt-n1">
                                      <div class="pe-3 mb-5">
                                        <div class="fs-5 mb-2">
                                          New order <a href="#" class="text-primary me-1">#67890</a>
                                          is placed for Workshow Planning &amp; Budget Estimation
                                        </div>

                                        <div class="d-flex align-items-center mt-1 fs-6">
                                          <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>

                                          <a href="#" class="text-primary me-1">Jimmy Bold</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="tab-pane fade" id="tab-settings" role="tabpanel">
                      <div class="row py-4">
                        <div class="card">
                          <div class="card-header">
                            <div class="card-title fs-3">Project Settings</div>
                          </div>

                          <form id="kt_project_settings_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                            <div class="card-body p-9">
                              <div class="row mb-5">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Project Logo</div>
                                </div>

                                <div class="col-lg-8">
                                  <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg');">
                                    <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('assets/media/svg/brand-logos/volicity-9.svg');"></div>

                                    <label
                                      class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                      data-kt-image-input-action="change"
                                      data-bs-toggle="tooltip"
                                      aria-label="Change avatar"
                                      data-bs-original-title="Change avatar"
                                      data-kt-initialized="1"
                                    >
                                      <i class="bi bi-pencil fs-7"></i>

                                      <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                      <input type="hidden" name="avatar_remove" />
                                    </label>

                                    <span
                                      class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                      data-kt-image-input-action="cancel"
                                      data-bs-toggle="tooltip"
                                      aria-label="Cancel avatar"
                                      data-bs-original-title="Cancel avatar"
                                      data-kt-initialized="1"
                                    >
                                      <i class="bi bi-cross fs-2"></i>
                                    </span>

                                    <span
                                      class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                      data-kt-image-input-action="remove"
                                      data-bs-toggle="tooltip"
                                      aria-label="Remove avatar"
                                      data-bs-original-title="Remove avatar"
                                      data-kt-initialized="1"
                                    >
                                      <i class="bi bi-cross fs-2"></i>
                                    </span>
                                  </div>

                                  <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                </div>
                              </div>

                              <div class="row mb-8">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Project Name</div>
                                </div>

                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                  <input type="text" class="form-control " name="name" value="9 Degree Award" />
                                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                              </div>

                              <div class="row mb-8">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Project Type</div>
                                </div>

                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                  <input type="text" class="form-control " name="type" value="Client Relationship" />
                                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                              </div>

                              <div class="row mb-8">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Project Description</div>
                                </div>

                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                  <textarea name="description" class="form-control  h-100px"> </textarea>
                                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                              </div>

                              <div class="row mb-8">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Due Date</div>
                                </div>

                                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                  <div class="position-relative d-flex align-items-center">
                                    <i class="bi bi-calendar-8 position-absolute ms-4 mb-1 fs-2"></i>
                                    <input class="form-control  ps-12 flatpickr-input" name="date" placeholder="Pick a date" id="kt_datepicker_1" type="text" readonly="readonly" />
                                  </div>
                                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>
                              </div>

                              <div class="row mb-8">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Notifications</div>
                                </div>

                                <div class="col-xl-9">
                                  <div class="d-flex h-100">
                                    <div class="form-check form-check-custom form-check-solid me-9">
                                      <input class="form-check-input" type="checkbox" value="" id="email" />
                                      <label class="form-check-label ms-3" for="email">
                                        Email
                                      </label>
                                    </div>
                                    <div class="form-check form-check-custom form-check-solid">
                                      <input class="form-check-input" type="checkbox" value="" id="phone" checked="checked" />
                                      <label class="form-check-label ms-3" for="phone">
                                        Phone
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-xl-3">
                                  <div class="fs-6 mt-2 mb-3">Status</div>
                                </div>

                                <div class="col-xl-9">
                                  <div class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" id="status" name="status" checked="checked" />
                                    <label class="form-check-label text-gray-400 ms-3" for="status">
                                      Active
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                              <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>

                              <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
                            </div>

                            <input type="hidden" />
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<div class="modal fade" id="modal_project" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen p-8">
        <div class="modal-content modal-rounded">
            <div class="modal-header" id="kt_modal_add_project_header">
                <h2 class="">Add project</h2>

                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y m-5">
                <form id="modal_project_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    {{csrf_field()}}
                    <span id="form_output"></span>

                    <div
                        class="d-flex flex-column scroll-y px-5 px-lg-10"
                        id="kt_modal_add_project_scroll"
                        data-kt-scroll="false"
                        data-kt-scroll-activate="false"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_project_header"
                        data-kt-scroll-wrappers="#kt_modal_add_project_scroll"
                        data-kt-scroll-offset="100px"
                    >
                        <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                            <div class="stepper-nav flex-center flex-wrap mb-10">
                                <div class="stepper-item mx-4 my-2 current" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Project Type
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item mx-4 my-2" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Settings
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item mx-4 my-2" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Budget
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item mx-4 my-2" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">4</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Build a Team
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item mx-4 my-2" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">5</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Upload Files
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>
                                <div class="stepper-item mx-4 my-2 d-none" data-kt-stepper-element="nav" >
                                    <div class="stepper-wrapper d-flex align-items-center">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">6</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Completed
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>
                            </div>

                            <div class="mb-5">
                                <div class="flex-column current" data-kt-stepper-element="content" id="step1">
                                    <div class="w-100">
                                        <div class="pb-7 pb-lg-12">
                                            <h1 class="text-dark">Project Type</h1>

                                            <div class="text-muted fs-4">
                                                If you need more info, please check out
                                                <a href="#" class="link-primary">FAQ Page</a>
                                            </div>
                                        </div>

                                        <div class="row g-9 mb-8" data-kt-buttons="true">
                                            <div class="col-md-6 fv-row">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
                                                    <input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />

                                                    <span class="d-flex">
                                                        <i class="bi-outline bi-profile-circle fs-3hx"></i>

                                                        <span class="ms-4">
                                                            <span class="fs-3 text-gray-900 mb-2 d-block">Personal Project</span>

                                                            <span class="fs-4 text-muted">
                                                                If you need more info, please check it out
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
                                                    <input class="btn-check" type="radio" name="project_type" value="2" />

                                                    <span class="d-flex">
                                                        <i class="bi-outline bi-rocket fs-3hx"></i>

                                                        <span class="ms-4">
                                                            <span class="fs-3 text-gray-900 mb-2 d-block">Team Project</span>

                                                            <span class="fs-4 text-muted">
                                                                Create corporate account to manage users
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content" id="step2">
                                    <div class="w-100">
                                        <div class="pb-12">
                                            <h1 class="text-dark">Project Info</h1>

                                            <div class="text-muted fs-4">
                                                If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6 fv-row">
                                                <div class="fv-row">
                                                    <label class="d-flex align-items-center fs-6 form-label mb-2">
                                                        <span class="required">Project Name</span>

                                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify project name"> <i class="bi-outline bi-information-5 text-gray-500 fs-6"></i></span>
                                                    </label>

                                                    <input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" name="project_name" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 fv-row">
                                                <div class="fv-row">
                                                    <label class="required fs-6 mb-2">Customer</label>

                                                    <select class="from-control form-select form-select-solid" data-hide-search="true" data-placeholder="Select..." name="customer_id">
                                                        @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fv-row mb-4">
                                            <label class="required fs-6 mb-2">Project Description</label>

                                            <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Project Description" name="description"> </textarea>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6 fv-row">
                                                <div class="fv-row">
                                                    <label class="required fs-6 mb-2">Release Date</label>

                                                    <div class="position-relative d-flex align-items-center">
                                                        <i class="bi-outline bi-calendar-8 fs-2 position-absolute mx-4"></i>

                                                        <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="due_date" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 fv-row">
                                                <div class="fv-row mb-15 mt-8">
                                                    <div class="d-flex flex-stack">
                                                        <div class="me-5">
                                                            <label class="required fs-6">Notifications</label>
                                                            <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                                                        </div>

                                                        <div class="d-flex">
                                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                                <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="notifications[]" />

                                                                <span class="form-check-label">
                                                                    Email
                                                                </span>
                                                            </label>

                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked name="notifications[]" />

                                                                <span class="form-check-label">
                                                                    Phone
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content" id="step3">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-12">
                                            <h1 class="text-dark">Budget</h1>

                                            <div class="text-muted fs-4">
                                                If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                        </div>

                                        <div class="fv-row mb-8">
                                            <label class="d-flex align-items-center fs-6 mb-2">
                                                <span class="required">Setup Budget</span>
                                            </label>

                                            <div
                                                class="position-relative w-lg-250px"
                                                id="kt_modal_create_project_budget_setup"
                                                data-kt-dialer="true"
                                                data-kt-dialer-min="50"
                                                data-kt-dialer-max="50000"
                                                data-kt-dialer-step="100"
                                                data-kt-dialer-prefix="$"
                                                data-kt-dialer-decimals="2"
                                            >
                                                <input type="text" class="form-control form-control-solid border-0 ps-12" placeholder="Amount" name="project_budget_price" />

                                                <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="bi-outline bi-plus-circle fs-1"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="fv-row mb-8">
                                            <label class="fs-6 mb-2">Budget Usage</label>

                                            <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                <div class="col-md-6">
                                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio" name="budget_usage" value="1" checked="checked" />
                                                        </span>

                                                        <span class="ms-5">
                                                            <span class="fs-4 text-gray-800 mb-2 d-block">Precise Usage</span>

                                                            <span class="fs-7 text-gray-600">
                                                                Withdraw money to your bank account per transaction under $50,000 budget
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                            <input class="form-check-input" type="radio" name="budget_usage" value="2" />
                                                        </span>

                                                        <span class="ms-5">
                                                            <span class="fs-4 text-gray-800 mb-2 d-block">Extreme Usage</span>
                                                            <span class="fs-7 text-gray-600">
                                                                Withdraw money to your bank account per transaction under $50,000 budget
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fv-row mb-15">
                                            <div class="d-flex flex-stack">
                                                <div class="me-5">
                                                    <label class="fs-6">Allow Changes in Budget</label>
                                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                                </div>

                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" name="budget_allow" checked="checked" />
                                                    <span class="form-check-label text-muted">
                                                        Allowed
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content" id="step4">
                                    <div class="w-100">
                                        <div class="pb-12">
                                            <h1 class="text-dark">Build a Team</h1>

                                            <div class="text-muted fs-4">
                                                If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                        </div>

                                        <div class="mb-8">
                                            <label class="fs-6 mb-2">Invite Teammates</label>

                                            <input type="text" class="form-control form-control-solid" placeholder="Add project memnbers by name or email.." name="invite_teammates" />
                                        </div>

                                        <div class="mb-8">
                                            <div class="fs-6 mb-2">Team Members</div>

                                            <div class="mh-300px scroll-y me-n7 pe-7">
                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                            <div class="text-muted">smith@kpmg.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected>Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger"> M </span>
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                                            <div class="text-muted">melody@altbox.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected>Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                                            <div class="text-muted">max@kt.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected>Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                                            <div class="text-muted">sean@dellito.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected>Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger"> O </span>
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                                            <div class="text-muted">olivia@corpmail.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected>Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-primary text-primary"> N </span>
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                                            <div class="text-muted">owen.neil@gmail.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected>Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                                            <div class="text-muted">dam@consilting.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected>Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-danger text-danger"> E </span>
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                                            <div class="text-muted">emma@intenso.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected>Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                                            <div class="text-muted">ana.cf@limtel.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected>Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-info text-info"> A </span>
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                                            <div class="text-muted">robert@benko.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected>Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">John Miller</a>

                                                            <div class="text-muted">miller@mapple.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected>Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <span class="symbol-label bg-light-success text-success"> L </span>
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                                            <div class="text-muted">lucy.m@fentech.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2" selected>Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                                            <div class="text-muted">ethan@loop.com.au</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1" selected>Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3">Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                                        </div>

                                                        <div class="ms-5">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                            <div class="text-muted">smith@kpmg.com</div>
                                                        </div>
                                                    </div>

                                                    <div class="ms-2 w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                            <option value="1">Guest</option>
                                                            <option value="2">Owner</option>
                                                            <option value="3" selected>Can Edit</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-stack mb-15">
                                            <div class="me-5">
                                                <label class="fs-6">Adding Users by Team Members</label>
                                                <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                            </div>

                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content" id="step5">
                                    <div class="w-100">
                                        <div class="pb-10 pb-lg-12">
                                            <h1 class="text-dark">Upload Files</h1>

                                            <div class="text-muted fs-4">
                                                If you need more info, please check
                                                <a href="#" class="link-primary">Project Guidelines</a>
                                            </div>
                                        </div>

                                        <div class="fv-row mb-8">
                                            <div class="dropzone" id="kt_modal_create_project_files_upload">
                                                <div class="dz-message needsclick">
                                                    <i class="bi-outline bi-file-up fs-3hx text-primary"></i>

                                                    <div class="ms-4">
                                                        <h3 class="dfs-3 text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                        <span class="fs-4 text-muted">Upload up to 10 files</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-8">
                                            <label class="fs-6 mb-2">Uploaded File</label>

                                            <div class="mh-300px scroll-y me-n7 pe-7">
                                                <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/pdf.svg" alt="icon" />
                                                        </div>

                                                        <div class="ms-6">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Avionica Technical Requirements</a>
                                                            <div class="text-muted">230kb</div>
                                                        </div>
                                                    </div>

                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/doc.svg" alt="icon" />
                                                        </div>

                                                        <div class="ms-6">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">9 Degree CURD draftplan</a>
                                                            <div class="text-muted">3.6mb</div>
                                                        </div>
                                                    </div>

                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/css.svg" alt="icon" />
                                                        </div>

                                                        <div class="ms-6">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">User CRUD Styles</a>
                                                            <div class="text-muted">85kb</div>
                                                        </div>
                                                    </div>

                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/ai.svg" alt="icon" />
                                                        </div>

                                                        <div class="ms-6">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Design Initial Logo</a>
                                                            <div class="text-muted">40kb</div>
                                                        </div>
                                                    </div>

                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-35px">
                                                            <img src="assets/media/svg/files/tif.svg" alt="icon" />
                                                        </div>

                                                        <div class="ms-6">
                                                            <a href="#" class="fs-5 text-gray-900 text-hover-primary mb-2">Tower Hill Bilboard</a>
                                                            <div class="text-muted">27mb</div>
                                                        </div>
                                                    </div>

                                                    <div class="min-w-100px">
                                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                                            <option></option>
                                                            <option value="1">Remove</option>
                                                            <option value="2">Modify</option>
                                                            <option value="3">Select</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fv-row mb-8">
                                            <div class="d-flex flex-stack">
                                                <div class="me-5">
                                                    <label class="fs-6">Allow Changes in Budget</label>
                                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                                </div>

                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
                                                    <span class="form-check-label text-muted">
                                                        Allowed
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content" id="step6">
                                    <div class="w-100">
                                        <div class="pb-12 text-center">
                                            <!-- <h1 class="text-dark">Project Created!</h1> -->

                                            <div class="text-muted fs-4">
                                                Click the save button to Complete the Project Setup!
                                            </div>
                                        </div>

                                        <div class="text-center px-4">
                                            <img src="assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mt-4 mb-4">
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>

                                <div>
                                    <input type="hidden" name="project_id" id="project_id" value="" />
                                    <input type="hidden" name="button_action" id="button_action" value="insert" />

                                    <button type="submit" class="btn btn-primary" name="submit" id="action" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Save
                                        </span>
                                        <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_projects_export_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="">Export projects</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="kt_projects_export_form" class="form" action="#">
                    <div class="fv-row mb-10">
                        <label class="fs-5 form-label mb-5">Select Export Format:</label>

                        <select name="country" data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
                            <option value="excell">Excel</option>
                            <option value="pdf">PDF</option>
                            <option value="cvs">CVS</option>
                            <option value="zip">ZIP</option>
                        </select>
                    </div>

                    <div class="fv-row mb-10">
                        <label class="fs-5 form-label mb-5">Select Date Range:</label>

                        <input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
                    </div>

                    <div class="row fv-row mb-15">
                        <label class="fs-5 form-label mb-5">Payment Type:</label>

                        <div class="d-flex flex-column">
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    All
                                </span>
                            </label>

                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    Visa
                                </span>
                            </label>

                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    Mastercard
                                </span>
                            </label>

                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    American Express
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="text-center pt-10">
                        <input type="hidden" name="project_id" id="project_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />

                        <!-- Next button for each step -->
                        <button type="button" class="btn btn-primary" data-kt-stepper-element="next" data-next="#step2">
                            <span class="indicator-label">Next</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>

                        <!-- ... Add other next buttons for each step ... -->

                        <!-- Save button -->
                        <button type="button" class="btn btn-primary" id="saveButton">
                            <span class="indicator-label">Save</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
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
    
    $(document).ready(function () {
        const datepicker = $("[name=due_date]");

        datepicker.flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            mode: "range",
        });
    });
    $(document).ready(function () {
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_basic");

        // Initialize Stepper
        var stepper = new KTStepper(element);

        // Handle next step
        stepper.on("kt.stepper.next", function (stepper) {
            stepper.goNext(); // go next step
        });

        // Handle previous step
        stepper.on("kt.stepper.previous", function (stepper) {
            stepper.goPrevious(); // go previous step
        });
    });

    $(document).ready(function () {
        $("#projects_table").DataTable({
            processing: true,
            searching: true,
            paging: true,
            pageLength: 10,
            ajax: {
                url: "{{ route('projects.getall') }}",
            },
            columns: [
                {
                    data: "id",
                    render: function (data) {
                        return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3" ><input type="checkbox" class="form-check-input row-checkbox" name="project_ids[]" value="' + data + '"></div>';
                    },
                    orderable: false,
                    searchable: false,
                },
                { data: "project_name" },
                { data: "description" },
                { data: "description" },
                { data: "due_date" },
                { data: "created_at" },
                { data: "action", orderable: true, searchable: true },
            ],
            columnDefs: [
                {
                    targets: "_all",
                    className: "text-center",
                },
            ],
        });
    });

    $(document).on("click", "#add_data", function () {
        $("#modal_project").modal("show");
        $("#modal_project_form")[0].reset();
        $("#form_output").html("");
        $("#button_action").val("insert");
        $("#action").val("Add");
        $(".modal-title").text("Add a project");
    });

    $(document).ready(function () {
        let formValidator;
        function setupFormValidation(form) {
            formValidator = FormValidation.formValidation(form, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: "project name is required",
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: "",
                    }),
                },
            });
        }

        const form = document.getElementById("modal_project_form");
        setupFormValidation(form);
        $("#action").on("click", function (event) {
            event.preventDefault();
            formValidator.validate().then(function (status) {
                if (status === "Valid") {
                    const form_data = new FormData(form);
                    $.ajax({
                        url: "{{ route('projects.store') }}",
                        type: "POST",
                        data: form_data,
                        dataType: "json",
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            if (data.error.length > 0) {
                                var error_html = "";
                                for (var count = 0; count < data.error.length; count++) {
                                    error_html += '<div class="alert alert-danger">' + data.error[count] + "</div>";
                                }
                                $("#form_output").html(error_html);
                            } else {
                                const submitButton = document.getElementById("action");
                                submitButton.setAttribute("data-kt-indicator", "on");
                                submitButton.disabled = true;
                                setTimeout(function () {
                                    submitButton.removeAttribute("data-kt-indicator");
                                    submitButton.disabled = false;
                                    Swal.fire({
                                        text: "project has been successfully created!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            $("#modal_project_form")[0].reset();
                                            $("#projects_table").DataTable().ajax.reload();
                                            $("#modal_project").modal("hide");
                                        }
                                    });
                                }, 2000);
                            }
                        },
                        error: function () {
                            console.log("AJAX error occurred");
                        },
                    });
                } else {
                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        },
                    });
                }
            });
        });
    });

    $(document).on("click", ".edit", function () {
        var id = $(this).attr("id");

        $("#form_output").html("");
        $.ajax({
            url: "{{ route('projects.getdata') }}",
            method: "get",
            data: { id: id },
            dataType: "json",
            success: function (data) {
                var ignoreArray = ["id", "created_at", "updated_at"];
                $.each(data, function (key, value) {
                    if ($.inArray(key, ignoreArray) == -1) {
                        $("#" + key).val(value);
                    }
                });
                $("#id").val(id);
                $("#modal_project").modal("show");
                $("#action").val("Save");
                $(".modal-title").text("Update project");
                $("#button_action").val("update");
            },
        });
    });

    $(document).on("click", ".delete", function () {
        var id = $(this).attr("id");
        Swal.fire({
            text: "Are you sure you want to delete this project?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel",
            buttonsStyling: false,
            customClass: {
                confirmButton: "btn btn-primary me-3",
                cancelButton: "btn btn-light",
            },
        }).then(function (result) {
            if (result.isConfirmed) {
                deleteproject(id);
            }
        });
    });

    function deleteproject(id) {
        $.ajax({
            url: "{{ route('projects.delete') }}",
            method: "get",
            data: { id: id },
            beforeSend: function () {
                showDeleteIndicator();
            },
            success: function (data) {
                hideDeleteIndicator();
                Swal.fire({
                    text: "project has been deleted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#projects_table").DataTable().ajax.reload();
            },
            error: function () {
                hideDeleteIndicator();
                Swal.fire({
                    text: "An error occurred while deleting the project.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
            },
        });
    }

    function showDeleteIndicator() {
        const deleteButton = document.querySelector(".delete");
        deleteButton.setAttribute("data-kt-indicator", "on");
        deleteButton.disabled = true;
    }
    function hideDeleteIndicator() {
        const deleteButton = document.querySelector(".delete");
        deleteButton.removeAttribute("data-kt-indicator");
        deleteButton.disabled = false;
    }

    $(document).ready(function () {
        // Handle check state
        $("#projects_select_all").on("change", function () {
            const isChecked = $(this).prop("checked");
            $('[type="checkbox"]').prop("checked", isChecked);
        });
    });

    $(document).ready(function () {
        const closeButton = $('[modal-close="close"]');
        closeButton.on("click", function (e) {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to close?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, close it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                },
            }).then(function (result) {
                if (result.value) {
                    // Hide modal
                    $("#modal_project").modal("hide");
                }
            });
        });
    });
    $(document).ready(function () {
        $("#selectAll").on("click", function () {
            const isChecked = $(this).prop("checked");
            $(".row-checkbox").prop("checked", isChecked);
        });

        $(".row-checkbox").on("click", function () {
            const allChecked = $(".row-checkbox:checked").length === $(".row-checkbox").length;
            $("#selectAll").prop("checked", allChecked);
        });
    });
</script>
