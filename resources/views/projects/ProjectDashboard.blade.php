@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')

<div id="kt_app_content_container" class="app-container container-xxl">
    <div class="card card-flush mt-lg-5 mb-lg-10">
        <div class="card-body pt-9 pb-0">
            <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                    <img class="mw-50px mw-lg-75px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
                </div>

                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-1">
                                <a href="#" class="text-gray-800 text-hover-primary fs-2  me-3">Project Dashboard</a>
                                <span class="badge badge-light-success me-auto">In Progress</span>
                            </div>

                            <div class="d-flex flex-wrap  mb-4 fs-5 text-gray-400">
                                #1 Tool to get started with Web Apps any Kind &amp; size
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>

                            <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>

                            <div class="me-0">
                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi-solid bi-dots-horizontal fs-2x"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments
                                        </div>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Create Invoice
                                        </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">
                                            Create Payment

                                            <span
                                                class="ms-2"
                                                data-bs-toggle="tooltip"
                                                aria-label="Specify a target name for future usage and reference"
                                                data-bs-original-title="Specify a target name for future usage and reference"
                                                data-kt-initialized="1"
                                            >
                                                <i class="bi bi-information fs-6"></i>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Generate Bill
                                        </a>
                                    </div>

                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Plans
                                                </a>
                                            </div>

                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Billing
                                                </a>
                                            </div>

                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Statements
                                                </a>
                                            </div>

                                            <div class="separator my-2"></div>

                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                        <span class="form-check-label text-muted fs-6">
                                                            Recuring
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">
                                            Settings
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-start">
                        <div class="d-flex flex-wrap">
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="fs-4 ">29 Jan, 2023</div>
                                </div>

                                <div class=" fs-6 text-gray-400">Due Date</div>
                            </div>

                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-arrow-down fs-3 text-danger me-2"></i>
                                    <div class="fs-4  counted" data-kt-countup="true" data-kt-countup-value="75" data-kt-initialized="1">75</div>
                                </div>

                                <div class=" fs-6 text-gray-400">Open Tasks</div>
                            </div>

                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-arrow-up fs-3 text-success me-2"></i>
                                    <div class="fs-4  counted" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$" data-kt-initialized="1">$15,000</div>
                                </div>

                                <div class=" fs-6 text-gray-400">Budget Spent</div>
                            </div>
                        </div>

                        <div class="symbol-group symbol-hover mb-3">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                <span class="symbol-label bg-warning text-inverse-warning ">A</span>
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon" data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                <img alt="Pic" src="assets/media/avatars/1.jpg" />
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
                                <img alt="Pic" src="assets/media/avatars/3.jpg" />
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1">
                                <img alt="Pic" src="assets/media/avatars/1.jpg" />
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                <span class="symbol-label bg-primary text-inverse-primary ">S</span>
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                <img alt="Pic" src="assets/media/avatars/1.jpg" />
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                <span class="symbol-label bg-info text-inverse-info ">P</span>
                            </div>

                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                <img alt="Pic" src="assets/media/avatars/2.jpg" />
                            </div>

                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-inverse-dark fs-8 " data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="View more users" data-kt-initialized="1">+42</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator"></div>

            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 ">
                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6" href="project.html"> Overview </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6 active" href="targets.html"> Targets </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6" href="budget.html"> Budget </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6" href="users.html"> Users </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6" href="files.html"> Files </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6" href="activity.html"> Activity </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-active-primary py-5 me-6" href="settings.html"> Settings </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="d-flex flex-wrap flex-stack pt-10 pb-8" data-select2-id="select2-data-124-6tzc">
        <h3 class=" my-2">
            Project Targets
            <span class="fs-6 text-gray-400  ms-1">by Recent Updates ↓</span>
        </h3>
        <div class="d-flex align-items-center position-relative me-4">
                    <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Search projects" />
                </div>
        <div class="d-flex flex-wrap my-1" data-select2-id="select2-data-123-3lco">
            <ul class="nav nav-pills me-5" role="tablist">
                <li class="nav-item m-0" role="presentation">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active" data-bs-toggle="tab" href="#kt_project_targets_card_pane" aria-selected="true" role="tab">
                        <i class="bi bi-plus fs-1"></i>
                    </a>
                </li>

                <li class="nav-item m-0" role="presentation">
                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary" data-bs-toggle="tab" href="#kt_project_targets_table_pane" aria-selected="false" role="tab" tabindex="-1">
                        <i class="bi bi-bar-chart fs-2"></i>
                    </a>
                </li>
            </ul>

            <div class="my-0" data-select2-id="select2-data-122-82eh">
                <select
                    name="status"
                    data-control="select2"
                    data-hide-search="true"
                    class="form-select form-select-sm form-select-solid w-150px select2-hidden-accessible"
                    data-select2-id="select2-data-7-bq6v"
                    tabindex="-1"
                    aria-hidden="true"
                    data-kt-initialized="1"
                >
                    <option value="1" selected="" data-select2-id="select2-data-9-4z9d">Recently Updated</option>
                    <option value="2" data-select2-id="select2-data-126-49aq">Last Month</option>
                    <option value="3" data-select2-id="select2-data-127-bify">Last Quarter</option>
                    <option value="4" data-select2-id="select2-data-128-kzgg">Last Year</option>
                </select>

            </div>
            <div class="d-flex ms-3">
                    <button type="button" class="btn btn-sm btn-flex btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_projects_export_modal"><i class="bi bi-exit-up fs-2"></i>Export</button>

                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" tooltip="Add New project" id="add_data"> <i class="bi bi-plus-lg me-2"></i> Add project </a>
                </div>
        </div>
    </div>

    <div class="tab-content">
        <div id="kt_project_targets_card_pane" class="tab-pane fade active show" role="tabpanel">
            <div class="row g-9">
                <div class="col-md-4 col-lg-12 col-xl-4">
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class=" fs-4">
                                Yet to start
                                <span class="fs-6 text-gray-400 ms-2">2</span>
                            </div>

                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-2"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64d131c79061c">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label ">Status:</label>

                                            <div>
                                                <select
                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                    multiple=""
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64d131c79061c"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-10-0d2p"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-aahp" style="width: 100%;">
                                                    <span class="selection">
                                                        <span
                                                            class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                            role="combobox"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                            tabindex="-1"
                                                            aria-disabled="false"
                                                        >
                                                            <ul class="select2-selection__rendered" id="select2-97lh-container"></ul>
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
                                                                    aria-describedby="select2-97lh-container"
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
                                            <label class="form-label ">Member Type:</label>

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
                                            <label class="form-label ">Notifications:</label>

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

                        <div class="h-3px w-100 bg-warning"></div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">UI Design</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Harry Mcpherson" data-bs-original-title="Harry Mcpherson" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                        <span class="symbol-label bg-primary text-inverse-primary ">S</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">7</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">10</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">Phase 2.6 QA</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                        <span class="symbol-label bg-warning text-inverse-warning ">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                        <span class="symbol-label bg-success text-inverse-success ">R</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">5</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <a href="#" class="btn btn-primary er w-100 fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Create New Target</a> -->
                </div>

                <div class="col-md-4 col-lg-12 col-xl-4">
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class=" fs-4">
                                In Progress
                                <span class="fs-6 text-gray-400 ms-2">4</span>
                            </div>

                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-2"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64d131c7907a4">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label ">Status:</label>

                                            <div>
                                                <select
                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                    multiple=""
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64d131c7907a4"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-12-khyf"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-13-ifjg" style="width: 100%;">
                                                    <span class="selection">
                                                        <span
                                                            class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                            role="combobox"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                            tabindex="-1"
                                                            aria-disabled="false"
                                                        >
                                                            <ul class="select2-selection__rendered" id="select2-vrl9-container"></ul>
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
                                                                    aria-describedby="select2-vrl9-container"
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
                                            <label class="form-label ">Member Type:</label>

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
                                            <label class="form-label ">Notifications:</label>

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

                        <div class="h-3px w-100 bg-primary"></div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">Development</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">Sales report page</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                        <span class="symbol-label bg-warning text-inverse-warning ">A</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">8</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">8</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">Testing</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">Meeting with customer</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Harry Mcpherson" data-bs-original-title="Harry Mcpherson" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                        <span class="symbol-label bg-primary text-inverse-primary ">S</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">4</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">UI Design</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">Design main Dashboard</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Francis Mitcham" data-bs-original-title="Francis Mitcham" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michelle Swanston" data-bs-original-title="Michelle Swanston" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/3.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                        <span class="symbol-label bg-primary text-inverse-primary ">S</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">5</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">Phase 2.6 QA</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">1</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-12 col-xl-4">
                    <div class="mb-9">
                        <div class="d-flex flex-stack">
                            <div class=" fs-4">
                                Completed
                                <span class="fs-6 text-gray-400 ms-2">3</span>
                            </div>

                            <div>
                                <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-plus fs-2"></i>
                                </button>

                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64d131c790a0e">
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark ">Filter Options</div>
                                    </div>

                                    <div class="separator border-gray-200"></div>

                                    <div class="px-7 py-5">
                                        <div class="mb-10">
                                            <label class="form-label ">Status:</label>

                                            <div>
                                                <select
                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                    multiple=""
                                                    data-kt-select2="true"
                                                    data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_64d131c790a0e"
                                                    data-allow-clear="true"
                                                    data-select2-id="select2-data-14-v4go"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                    data-kt-initialized="1"
                                                >
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                                <span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-15-pb4c" style="width: 100%;">
                                                    <span class="selection">
                                                        <span
                                                            class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                            role="combobox"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                            tabindex="-1"
                                                            aria-disabled="false"
                                                        >
                                                            <ul class="select2-selection__rendered" id="select2-ay61-container"></ul>
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
                                                                    aria-describedby="select2-ay61-container"
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
                                            <label class="form-label ">Member Type:</label>

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
                                            <label class="form-label ">Notifications:</label>

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

                        <div class="h-3px w-100 bg-success"></div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">UI Design</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">Branding Logo</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often takes a couple of hours if you can type</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                        <span class="symbol-label bg-success text-inverse-success ">R</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter" data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/2.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                        <span class="symbol-label bg-primary text-inverse-primary ">S</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">2</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">QA</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">To check User Management</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer takes a couple hours</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                        <span class="symbol-label bg-info text-inverse-info ">P</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">10</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-6 mb-xl-9">
                        <div class="card-body">
                            <div class="d-flex flex-stack mb-3">
                                <div class="badge badge-light">Phase 2.6 QA</div>

                                <div>
                                    <button type="button" class="btn btn-sm btn-icon btn-color-light-dark btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="bi bi-plus fs-2"></i>
                                    </button>

                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary  w-200px py-3" data-kt-menu="true">
                                        <div class="menu-item px-3">
                                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                Payments
                                            </div>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Create Invoice
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link flex-stack px-3">
                                                Create Payment

                                                <span
                                                    class="ms-2"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target name for future usage and reference"
                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                    data-kt-initialized="1"
                                                >
                                                    <i class="bi bi-information fs-6"></i>
                                                </span>
                                            </a>
                                        </div>

                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                                Generate Bill
                                            </a>
                                        </div>

                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                            <a href="#" class="menu-link px-3">
                                                <span class="menu-title">Subscription</span>
                                                <span class="menu-arrow"></span>
                                            </a>

                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Plans
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Billing
                                                    </a>
                                                </div>

                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Statements
                                                    </a>
                                                </div>

                                                <div class="separator my-2"></div>

                                                <div class="menu-item px-3">
                                                    <div class="menu-content px-3">
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />

                                                            <span class="form-check-label text-muted fs-6">
                                                                Recuring
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="menu-item px-3 my-1">
                                            <a href="#" class="menu-link px-3">
                                                Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-2">
                                <a href="#" class="fs-4  mb-1 text-gray-900 text-hover-primary">User Module Testing</a>
                            </div>

                            <div class="fs-6  text-gray-600 mb-5">First, a disclaimer – the entire process writing a blog post often.</div>

                            <div class="d-flex flex-stack flex-wrapr">
                                <div class="symbol-group symbol-hover my-1">
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                        <span class="symbol-label bg-success text-inverse-success ">R</span>
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy" data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                        <img alt="Pic" src="assets/media/avatars/1.jpg" />
                                    </div>
                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                        <span class="symbol-label bg-primary text-inverse-primary ">S</span>
                                    </div>
                                </div>

                                <div class="d-flex my-1">
                                    <div class="border border-dashed border-gray-300 rounded d-flex align-items-center py-2 px-3"><i class="bi bi-paper-clip fs-3"></i> <span class="ms-1 fs-7  text-gray-600">6</span></div>

                                    <div class="border border-dashed border-gray-300 d-flex align-items-center rounded py-2 px-3 ms-3">
                                        <i class="bi bi-message-text-2 fs-3"></i> <span class="ms-1 fs-7  text-gray-600">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kt_project_targets_table_pane" class="tab-pane fade" role="tabpanel">
            <div class="card card-flush">
                <div class="card-body pt-3">
                    <div id="kt_profile_overview_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                        <div class="row">
                            <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div>
                        </div>
                    </div>
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
