@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">
    <div class="card card-flush mb-6 mb-xl-9">
        <div class="card-header pt-5">
            <div class="card-title">
                <h2 class="d-flex align-items-center">tickets<span class="text-gray-600 fs-6 ms-1"></span></h2>
            </div>

            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative me-4">
                    <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Search tickets" />
                </div>

                <div class="d-flex ms-3">
                    <button type="button" class="btn btn-sm btn-flex btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_tickets_export_modal"><i class="bi bi-exit-up fs-2"></i>Export</button>

                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" tooltip="Add New ticket" id="add_data"> <i class="bi bi-plus-lg me-2"></i> Add ticket </a>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="tickets_table">
                        <thead>
                            <tr class="text-start text-muted fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input header-checkbox" type="checkbox" id="selectAll" />
                                    </div>
                                </th>
                                <th class="min-w-150px sorting">Ticket Name</th>
                                <th class="min-w-125px sorting">Discription</th>
                                <th class="min-w-125px sorting">Status</th>
                                <th class="min-w-125px sorting">Created Date</th>
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

<div class="modal fade" id="modal_ticket" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
                <div class="modal-header pb-0 border-0 justify-content-end" id="kt_modal_add_Ticket_header">
               
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body px-5 my-2">
                <form id="modal_ticket_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    {{csrf_field()}}
                    <span id="form_output"></span>



                    <div
                        class="d-flex flex-column scroll-y px-4 px-lg-5"
                        id="kt_modal_add_ticket_scroll"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="true"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_ticket_header"
                        data-kt-scroll-wrappers="#kt_modal_add_ticket_scroll"
                        data-kt-scroll-offset="200px"
                        style="max-height: 14px;"
                    >
                   

                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Create Ticket</h1>

                        <div class="text-gray-400  fs-5">If you need more info, please check <a href="" class=" link-primary">Support Guidelines</a>.</div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6  mb-2">
                            <span class="required">Subject</span>

                            <span class="ms-2" data-bs-toggle="tooltip" aria-label="Specify a subject for your issue" data-bs-original-title="Specify a subject for your issue" data-kt-initialized="1"> <i class="bi bi-bar-chart fs-7"></i> </span>
                        </label>

                        <input type="text" class="form-control form-control-solid" placeholder="Enter your ticket name" name="title" id="title" />
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>

                   
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="required fs-6 mb-2">Project</label>
                            <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a project" name="project_id" id="project_id">
                                <option value="">Select a project...</option>
                                <option value="1">HTML Theme</option>
                                <option value="2">Angular App</option>
                                <option value="3">Vue App</option>
                                <option value="4">React Theme</option>
                                <option value="5">Figma UI Kit</option>
                                <option value="6">Laravel App</option>
                                <option value="7">Blazor App</option>
                                <option value="8">Django App</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="required fs-6 mb-2">Assign</label>
                            <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a Team Member" name="user_id" id="user_id">
                                <option value="">Select a user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>



                    <div class="row g-9 mb-8">
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6  mb-2">Status</label>

                            <select
                                class="form-select form-select-solid select2-hidden-accessible"
                                data-control="select2"
                                data-placeholder="Open"
                                data-hide-search="true"
                                data-select2-id="select2-data-13-zemy"
                                tabindex="-1"
                                aria-hidden="true"
                                data-kt-initialized="1"
                                name="status_id"
                                id="status_id"
                            >
                                <option value=""></option>
                                <option value="1" selected="" data-select2-id="select2-data-15-ib9p">Open</option>
                                <option value="2">Pending</option>
                                <option value="3">Resolved</option>
                                <option value="3">Closed</option>
                            </select>
                        </div>

                        <div class="col-md-6 fv-row fv-plugins-icon-container">
                            <label class="required fs-6  mb-2">Due Date</label>

                            <div class="position-relative d-flex align-items-center">
                                <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                    <i class="bi bi-calendar-date"></i>
                                </div>

                                <input class="form-control form-control-solid ps-12 flatpickr-input" placeholder="Select a date" name="due_date" id="due_date" type="text" readonly="readonly" />
                            </div>

                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <label class="fs-6  mb-2">Description</label>

                        <textarea class="form-control form-control-solid" rows="4" name="description" id="description" placeholder="Type your ticket description"> </textarea>
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>

                    <div class="fv-row mb-8">
                        <label class="fs-6  mb-2">Attachments</label>

                        <div class="dropzone dz-clickable" id="kt_modal_create_ticket_attachments">
                            <div class="dz-message needsclick align-items-center">
                                <i class="bi bi-file-up fs-3hx text-primary"></i>

                                <div class="ms-4">
                                    <h3 class="fs-5  text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class=" fs-7 text-gray-400">Upload up to 10 files</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-15 fv-row fv-plugins-icon-container">
                        <div class="d-flex flex-stack">
                            <div class=" me-5">
                                <label class="fs-6">Notifications</label>

                                <div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
                            </div>

                            <div class="d-flex align-items-center">
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications" value="email" checked="checked" />

                                    <span class="form-check-label ">
                                        Email
                                    </span>
                                </label>

                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications" value="phone" />

                                    <span class="form-check-label ">
                                        Phone
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                    </div>
                    

                    </div>

                    <div class="text-center pt-10">
                        <input type="hidden" name="ticket_id" id="ticket_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />
                        <button type="reset" class="btn btn-light me-3" modal-close="close">
                            Discard
                        </button>

                        <button type="submit" class="btn btn-primary" name="submit" id="action">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kt_tickets_export_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Export tickets</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="kt_tickets_export_form" class="form" action="#">
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

                        <input class="form-control form-control-solid" placeholder="Pick a date" name="date" id="date" />
                    </div>

                    <div class="row fv-row mb-15">
                        <label class="fs-5 form-label mb-5">Status</label>

                        <div class="d-flex flex-column">
                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    Open
                                </span>
                            </label>

                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    Close
                                </span>
                            </label>

                            <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                <input class="form-check-input" type="checkbox" value="3" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    Rivew
                                </span>
                            </label>

                            <label class="form-check form-check-custom form-check-sm form-check-solid">
                                <input class="form-check-input" type="checkbox" value="4" name="payment_type" />
                                <span class="form-check-label text-gray-600">
                                    Completed
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="reset" id="kt_tickets_export_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_tickets_export_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
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

        
        $("#date").daterangepicker();
        $("#due_date").daterangepicker();

        $("#tickets_table").DataTable({
            processing: true,
            searching: true,
            paging: true,
            pageLength: 10,
            ajax: {
                url: "{{ route('tickets.getall') }}",
            },
            columns: [
                {
                    data: "id",
                    render: function (data) {
                        return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3" ><input type="checkbox" class="form-check-input row-checkbox" name="ticket_ids[]" value="' + data + '"></div>';
                    },
                    orderable: false,
                    searchable: false,
                },
                { data: "title" },
                { data: "description" },
                { data: "status_name" },
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
        $("#modal_ticket").modal("show");
        $("#modal_ticket_form")[0].reset();
        $("#form_output").html("");
        $("#button_action").val("insert");
        $("#action").val("Add");
        $(".modal-title").text("Add a ticket");
    });

    $(document).ready(function () {
        let formValidator;
        function setupFormValidation(form) {
            formValidator = FormValidation.formValidation(form, {
                fields: {
                    title: {
                        validators: {
                            notEmpty: {
                                message: "ticket name is required",
                            },
                        },
                    },
                    status: {
                        validators: {
                            notEmpty: {
                                message: "ticket company is required",
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

        const form = document.getElementById("modal_ticket_form");
        setupFormValidation(form);
        $("#action").on("click", function (event) {
            event.preventDefault();
            formValidator.validate().then(function (status) {
                if (status === "Valid") {
                    const form_data = new FormData(form);
                    $.ajax({
                        url: "{{ route('tickets.store') }}",
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
                                        text: "ticket has been successfully created!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            $("#modal_ticket_form")[0].reset();
                                            $("#tickets_table").DataTable().ajax.reload();
                                            $("#modal_ticket").modal("hide");
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
            url: "{{ route('tickets.getdata') }}",
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
                $("#ticket_id").val(id);
                $("#modal_ticket").modal("show");
                $("#action").val("Save");
                $(".modal-title").text("Update ticket");
                $("#button_action").val("update");
            },
        });
    });

    $(document).on("click", ".delete", function () {
        var id = $(this).attr("id");
        Swal.fire({
            text: "Are you sure you want to delete this ticket?",
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
                deleteticket(id);
            }
        });
    });

    function deleteticket(id) {
        $.ajax({
            url: "{{ route('tickets.delete') }}",
            method: "get",
            data: { id: id },
            beforeSend: function () {
                showDeleteIndicator();
            },
            success: function (data) {
                hideDeleteIndicator();
                Swal.fire({
                    text: "ticket has been deleted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#tickets_table").DataTable().ajax.reload();
            },
            error: function () {
                hideDeleteIndicator();
                Swal.fire({
                    text: "An error occurred while deleting the ticket.",
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
        $("#tickets_select_all").on("change", function () {
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
                    $("#modal_ticket").modal("hide");
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
