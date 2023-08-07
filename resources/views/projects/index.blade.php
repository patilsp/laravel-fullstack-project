@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">
    <div class="card card-flush mb-6 mb-xl-9">
        <div class="card-header pt-5">
            <div class="card-title">
                <h2 class="d-flex align-items-center">projects<span class="text-gray-600 fs-6 ms-1"></span></h2>
            </div>

            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative me-4">
                    <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Search projects" />
                </div>

                <div class="d-flex ms-3">
                    <button type="button" class="btn btn-sm btn-flex btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_projects_export_modal"><i class="bi bi-exit-up fs-2"></i>Export</button>

                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" tooltip="Add New project" id="add_data"> <i class="bi bi-plus-lg me-2"></i> Add project </a>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="projects_table">
                        <thead>
                            <tr class="text-start text-muted fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input header-checkbox" type="checkbox" id="selectAll" />
                                    </div>
                                </th>
                                <th class="min-w-150px sorting">Project Name</th>
                                <th class="min-w-150px sorting">Description</th>
                                <th class="min-w-150px sorting">project Name</th>
                                <th class="min-w-150px sorting">Due Date</th>
                                <th class="min-w-125px sorting">status</th>
                                <th class="text-end min-w-100px sorting_disabled">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600"></tbody>
                    </table>
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
                <h2 class="fw-bold">Export projects</h2>
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
