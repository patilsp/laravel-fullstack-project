@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/board.css" rel="stylesheet" type="text/css" />
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">

<div class="card card-custom gutter-b">



</div>
    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">
                    Task Board
                </h3>
            </div>
            <div class="d-flex flex-wrap mt-2">
                    <div class="search me-2">
                        <i class="bi bi-search search-icon fs-2 text-gray-500"></i>
                        <input type="text" id="search-input" class="search-input form-control ps-13" name="search" value="" placeholder="Search Task..." />
                    </div>

                    <button class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary mb-1 add-task-board w-150px"><i class="bi bi-plus fs-2"></i> Add Board</button>
                </div>
        </div>
        <div class="card-body p-0 m-0">
          
            <div class="py-4">
                <div class="board">
                    <div class="btn-board"></div>
                </div>
            </div>
            
            <div class="popup" id="new-task">
                <div class="popup-content">
                    <div class="d-flex heading">
                        <h4>
                            New Tasks
                        </h4>
                        <span class="close">
                            <img src="assets/media/images/close.png" class="close-btn w-30px" alt="close">
                        </span>
                    </div>
                    <form action="" id="add-task">
                        <label for="">Title</label>
                        <input type="text" name="title" autocomplete="off" />
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
                            <svg height="14px" style="margin-top: 3px;" viewBox="0 0 311 311.07733" width="14px" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"
                                />
                                <path
                                    d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"
                                />
                            </svg>
                        </span>
                    </div>
                    <form action="" id="editfrm-task">
                        <label for="">Title</label>
                        <input type="text" name="title" autocomplete="off" />
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
                            <svg height="14px" style="margin-top: 3px;" viewBox="0 0 311 311.07733" width="14px" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"
                                />
                                <path
                                    d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"
                                />
                            </svg>
                        </span>
                    </div>
                    <form action="" id="add-task-board">
                        <label for="">Title</label>
                        <input type="text" name="task-board-title" autocomplete="off" />
                    </form>
                    <div class="footer">
                        <button class="primary" id="bt-task-board">
                            Add
                        </button>
                        <button class="close">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />
    <br />
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


    $(document).ready(function () {
    var countTask = 0,
        taskItem = 0,
        closeIcon = '<svg height="14px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="14px" xmlns="http://www.w3.org/2000/svg"><path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"/><path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"/></svg>',
        closeSmall = '<svg height="10px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="10px" xmlns="http://www.w3.org/2000/svg"><path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"/><path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"/></svg>';

    var taskList = {
        "task_01": {
            "name": "To-Do",
            "task_items": {
                "items_001": {
                    "name": "Ui/UX Research",
                    "desc": "\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ratione minima quibusdam eligendi vitae voluptate eum suscipit quasi perspiciatis at expedita, rerum quos est tempore, aliquam deleniti nobis nisi deserunt.",
                    "priority": "medium"
                },
                "items_002": {
                    "name": "BackEnd Developing",
                    "desc": "\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ratione minima quibusdam eligendi vitae voluptate eum suscipit quasi perspiciatis at expedita, rerum quos est tempore, aliquam deleniti nobis nisi deserunt.",
                    "priority": "low"
                },
                "items_003": {
                    "name": "Api required for login",
                    "desc": "\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ratione minima quibusdam eligendi vitae voluptate eum suscipit quasi perspiciatis at expedita, rerum quos est tempore, aliquam deleniti nobis nisi deserunt.",
                    "priority": "high"
                }
            }
        },
        "task_02": {
            "name": "In-Progress",
            "task_items": {

            }
        },
        "task_03": {
            "name": "Review",
            "task_items": {
                "items_004": {
                    "name": "Bug fixing in Api ",
                    "desc": "\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ratione minima quibusdam eligendi vitae voluptate eum suscipit quasi perspiciatis at expedita, rerum quos est tempore, aliquam deleniti nobis nisi deserunt.",
                    "priority": "high"
                }
            }
        },
        "task_04": {
            "name": "Done",
            "task_items": {
                "items_005": {
                    "name": "SRR Documentation",
                    "desc": "\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime ratione minima quibusdam eligendi vitae voluptate eum suscipit quasi perspiciatis at expedita, rerum quos est tempore, aliquam deleniti nobis nisi deserunt.",
                    "priority": "low"
                }
            }
        }
    };

    Object.size = function (obj) {
        var size,
            key;
        size = 0
        for (key in obj) {
            if (obj.hasOwnProperty(key)) size++;
        }
        return size;
    };

    taskList = getTask("task_board") ? JSON.parse(getTask("task_board")) : taskList;
    countTask = Object.size(taskList);

    Init(taskList);
    function Init(taskList) {
        var i, j;
        for (i in taskList) {
            $(".btn-board").before(createTaskboard(taskList[i].name, i));
            for (j in taskList[i].task_items) {
                $("[task-board=" + i + "]").append(createTask(taskList[i].task_items[j], j));

            }
        }
        setTask(taskList);
    }

    function search(value) {
    var filter,
        i, li,
        txtValue;
    filter = value.toUpperCase();
    li = $("li");
    for (i = 0; i < li.length; i++) { // Fixed the typo here: changed "iscript" to "<"
        txtValue = $(li[i]).find("h4").text();
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

    function allowDrop(ev) {
        ev.preventDefault();
    }

    function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        ev.dataTransfer.setData("parent_id", $(ev.target.closest("ul")).attr("task-board"));
    }

    function drop(ev) {
        ev.preventDefault();
        var data,
            prev_id,
            new_id;

        data = ev.dataTransfer.getData("text");
        prev_id = ev.dataTransfer.getData("parent_id");

        if ($(ev.target).closest("li").length > 0) {
            $(ev.target).closest("li").before(document.getElementById(data));

        } else {
            $(ev.target).closest("ul").append(document.getElementById(data));
        }
        new_id = $(ev.target).closest("ul").attr('task-board');
        taskList[new_id]['task_items'][data] = taskList[prev_id]['task_items'][data];
        delete taskList[prev_id]['task_items'][data];
        setTask(taskList);

    }
    function createTaskboard(title, id) {
        var taskBoard, taskList_content;

        taskList_content = '<div class="header"><h2>' + title + '</h2>' +
            '<div class="d-flex"><button id="' + id + '" class="add-task">Add Task </button>' +
            '<button class="task-close">' +
            '<svg height="14px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="14px" xmlns="http://www.w3.org/2000/svg"><path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"/><path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"/></svg>'
            + '</button></div></div>' +
            '<ul task-board="' + id + '" class="list" ondrop="drop(event)" ondragover="allowDrop(event)"></ul> ';

        taskBoard = document.createElement("div");
        $(taskBoard).html(taskList_content).addClass("task-list");
        countTask++;
        return taskBoard;
    }
    function createTask({ name, priority, desc }, id) {
        var li;

        li = '<li id="' + id + '" draggable="true" ondragstart="drag(event)" class="task-item">' +
            '<h4>' + name + '</h4>' +
            '<p>' + desc + '</p><span class="task-item-close">' +
            '<svg height="10px" style="margin-top:3px" viewBox="0 0 311 311.07733" width="10px" xmlns="http://www.w3.org/2000/svg"><path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"></path><path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"></path></svg></span>' +
            '<span class="status ' + priority + '">' + priority + '</span></li>';
        li = $.parseHTML(li);
        taskItem++;
        return li;
    }
  
    function createViews(val, parent = null) {
        var i, j, s, node;

        for (i in val) {

            s = val[i]; node = document.createElement(val[i].tagName);
            node.setAttribute("id", i);

            if (val[i].children) {
                createViews(val[i].children, node);
            }
            for (j in s) {
                if (j.localeCompare("children") != 0) {
                    if (j === "text") {
                        node.innerHTML = s[j];
                    }
                    else if (j != "tagName") {
                        node.setAttribute(j, s[j]);
                    }
                }
            }
            if (parent != null) {
                if (parent.firstElementChild == null) {
                    parent.appendChild(node);
                }
                else {
                    parent.insertBefore(node, parent.firstElementChild.nextSibling);
                }
            }
        }
        return node;
    }

    function setTask(value) {
        localStorage.setItem("task_board", JSON.stringify(value));
    }

    function getTask(val) {
        var x = localStorage.getItem(val);
        return x;
    }

    function JsontoHTML(val, parent) {
        var i, s, j, node;

        for (i in val) {
            s = val[i];
            node = document.createElement(i);
            for (j in s) {
                if (j !== "child") {
                    node.setAttribute(j, s[j]);
                }
                else {
                    createViews(s[j], node);
                }
            }
        }
        parent.appendChild(node);
    }





    $(".board")
        .on("click", ".task-close", function (e) {
            if (confirm(" Are you sure want to delete Task board")) {
                var temp, ids;
                temp = $(e.target).closest(".task-list");
                ids = $(temp).find("[task-board]").attr("task-board");
                delete taskList[ids];
                temp.remove();
                setTask(taskList);
            }
        })
        .on("click", ".task-item-close", function (e) {
            if (confirm(" Are you sure want to delete Task")) {
                var li,
                    taskBoard,
                    itemId;

                li = $(e.target).closest(".task-item");
                taskBoard = $(li.closest("ul")).attr("task-board");
                itemId = $(li).attr("id");
                delete taskList[taskBoard]["task_items"][itemId];
                li.remove();
                setTask(taskList);
            }
        })
        .on("click", ".task-item", function (e) {
            var items_id,
                parent_id,
                editVal;
            items_id = $(e.target).closest("li").attr("id");
            parent_id = $(e.target).closest("ul").attr("task-board");

            editVal = taskList[parent_id]['task_items'][items_id];

            $("#edit-task").attr("data-target", parent_id)
                .attr("data-task-id", items_id);

            $("#edit-task [name='title']").val(editVal.name);
            $("#edit-task [name='desc']").val(editVal.desc);
            $("#edit-task [name='priority']").val(editVal.priority);
            $("#edit-task").show();
        })
        .on("click", ".add-task", function (e) {
            $("#new-task").attr("data-target", $(e.target).attr("id"));
            $("#new-task").show();
        });


    $("#update-task").on("click", function (e) {
        var val, values;
        val = $("#editfrm-task").serializeArray();
        values = {
            name: val[0].value,
            desc: val[1].value,
            priority: val[2].value
        };

        var task_item = $("#edit-task").attr("data-task-id")
        target = $("#edit-task").attr("data-target");

        taskList[target]["task_items"][task_item] = values;
        $("#" + task_item).replaceWith(createTask(values, task_item));
        setTask(taskList);
        $("#edit-task").hide();
    });


    $(".popup .close").on("click", function (e) {
        $(".popup").hide();
    })

    $(".add-task-board").on("click", function (e) {
        $("#new-task-board").show();

    });

    $("#new-task-board .primary").on("click", function (e) {
        var title, taskB_id;
        title = $("[name='task-board-title']").val();
        taskB_id= "task_" + countTask;
        $(".btn-board").before(createTaskboard(title, taskB_id));
        taskList[taskB_id] = {
            name: title,
            task_items: {
            }
        };
        setTask(taskList);
        $("[name='task-board-title']").val("");
        $("#new-task-board").hide();

    });



    $("#search-input").keyup(function (e) {
        var search;
        search = e.target.value
        serach(search);
    });

    $("#bt-task").on("click", function (e) {
        var val,
            item,
            target,
            values;
        val = $("#add-task").serializeArray();
        values = {
            name: val[0].value,
            desc: val[1].value,
            priority: val[2].value
        };

        item = createTask(values, "items_00" + taskItem);
        target = $("#new-task").attr("data-target");
        console.log(target);
        console.log(taskList[target]);
        taskList[target]["task_items"]["items_00" + taskItem] = values;

        setTask(taskList);
        $("[task-board='" + target + "']").prepend(item);
        $("#add-task").trigger("reset");
        $("#new-task").hide();
    });

});
</script>
