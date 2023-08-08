@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">
    <div class="card card-flush mb-6 mb-xl-9">
        <div class="card-header pt-5">
            <div class="card-title">
                <h2 class="d-flex align-items-center">tasks<span class="text-gray-600 fs-6 ms-1"></span></h2>
            </div>

            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative me-4">
                    <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Search tasks" />
                </div>

                <div class="d-flex ms-3">
                    <button type="button" class="btn btn-sm btn-flex btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_tasks_export_modal"><i class="bi bi-exit-up fs-2"></i>Export</button>

                    <a href="#" class="btn btn-sm btn-flex btn-light-primary" tooltip="Add New task" id="add_data"> <i class="bi bi-plus-lg me-2"></i> Add task </a>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="tasks_table">
                        <thead>
                            <tr class="text-start text-muted fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input header-checkbox" type="checkbox" id="selectAll" />
                                    </div>
                                </th>
                                <th class="min-w-150px sorting">Task Name</th>
                               
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

<div class="modal fade" id="modal_task" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_task_header">
                <h2 class="">Add task</h2>

                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body px-5 my-7">
                <form id="modal_task_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    {{csrf_field()}}
                    <span id="form_output"></span>



                    <div
                        class="d-flex flex-column scroll-y px-5 px-lg-10"
                        id="kt_modal_add_task_scroll"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="true"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_task_header"
                        data-kt-scroll-wrappers="#kt_modal_add_task_scroll"
                        data-kt-scroll-offset="300px"
                        style="max-height: 14px;"
                    >
                    
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                        <i class="bi bi-bar-chart fs-2tx text-warning me-4"></i>

                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Warning</h4>

                                <div class="fs-6 text-gray-700">Updating address may affter to your <a href="#">Tax Location</a></div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="fv-row mb-2 fv-plugins-icon-container">
                            <label class="required fs-6 mb-2">Task Name</label>
                            <input type="text" name="task_name" id="task_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Task name" />
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>

                    </div>

                    <div class="text-center pt-10">
                        <input type="hidden" name="task_id" id="task_id" value="" />
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
<div class="modal fade" id="kt_tasks_export_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">Export tasks</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="kt_tasks_export_form" class="form" action="#">
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

                    <div class="text-center">
                        <button type="reset" id="kt_tasks_export_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_tasks_export_submit" class="btn btn-primary">
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
        $("#tasks_table").DataTable({
            processing: true,
            searching: true,
            paging: true,
            pageLength: 10,
            ajax: {
                url: "{{ route('tasks.getall') }}",
            },
            columns: [
                {
                    data: "task_id",
                    render: function (data) {
                        return '<div class="form-check form-check-sm form-check-custom form-check-solid me-3" ><input type="checkbox" class="form-check-input row-checkbox" name="task_ids[]" value="' + data + '"></div>';
                    },
                    orderable: false,
                    searchable: false,
                },
                { data: "task_name" },
              
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
        $("#modal_task").modal("show");
        $("#modal_task_form")[0].reset();
        $("#form_output").html("");
        $("#button_action").val("insert");
        $("#action").val("Add");
        $(".modal-title").text("Add a task");
    });

    $(document).ready(function () {
        let formValidator;
        function setupFormValidation(form) {
            formValidator = FormValidation.formValidation(form, {
                fields: {
                    task_name: {
                        validators: {
                            notEmpty: {
                                message: "task name is required",
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

        const form = document.getElementById("modal_task_form");
        setupFormValidation(form);
        $("#action").on("click", function (event) {
            event.preventDefault();
            formValidator.validate().then(function (status) {
                if (status === "Valid") {
                    const form_data = new FormData(form);
                    $.ajax({
                        url: "{{ route('tasks.store') }}",
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
                                        text: "task has been successfully created!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            $("#modal_task_form")[0].reset();
                                            $("#tasks_table").DataTable().ajax.reload();
                                            $("#modal_task").modal("hide");
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
            url: "{{ route('tasks.getdata') }}",
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
                $("#task_id").val(id);
                $("#task_name").val(task_name);
                $("#modal_task").modal("show");
                $("#action").val("Save");
                $(".modal-title").text("Update task");
                $("#button_action").val("update");
            },
        });
    });

    $(document).on("click", ".delete", function () {
        var id = $(this).attr("id");
        Swal.fire({
            text: "Are you sure you want to delete this task?",
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
                deletetask(id);
            }
        });
    });

    function deletetask(id) {
        $.ajax({
            url: "{{ route('tasks.delete') }}",
            method: "get",
            data: { id: id },
            beforeSend: function () {
                showDeleteIndicator();
            },
            success: function (data) {
                hideDeleteIndicator();
                Swal.fire({
                    text: "task has been deleted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#tasks_table").DataTable().ajax.reload();
            },
            error: function () {
                hideDeleteIndicator();
                Swal.fire({
                    text: "An error occurred while deleting the task.",
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
        $("#tasks_select_all").on("change", function () {
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
                    $("#modal_task").modal("hide");
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
