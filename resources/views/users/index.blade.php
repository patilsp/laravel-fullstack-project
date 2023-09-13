@extends('layouts.master') @section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection @section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">
    <div class="card card-flush mb-6 mb-xl-9">
        <div class="card-header pt-5">
            <div class="card-title">
                <h2 class="d-flex align-items-center">Users<span class="text-gray-600 fs-6 ms-1"></span></h2>
            </div>

            <div class="card-toolbar">
                <div class="d-flex align-items-center position-relative me-4">
                    <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text" class="form-control form-control-solid w-250px ps-15" placeholder="Search Users" />
                </div>
                <div class="user_User w-px-200 pb-3 pb-sm-0 me-2">
                    <select id="UserUser" class="form-select text-capitalize">
                        <option value=""> Select Role </option>
                        @foreach ($roles as $role)
                        <option class="text-capitalize" value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex ms-3">
                    <a href="#" class="btn bg-body btn-color-gray-600 btn-active-info" tooltip="Add New User" id="add_data"> <i class="bi bi-plus-lg me-2"></i> Add User </a>
                </div>
            </div>
        </div>

        <div class="card-body pt-0 mt-2">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="users_table">
                        <thead>
                            <tr class="text-start text-muted fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2 sorting_disabled">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-150px sorting">User Name</th>
                                <th class="min-w-150px sorting">Employee Id</th>
                                <th class="min-w-150px sorting">Role</th>
                                <th class="min-w-150px sorting">Last Login</th>

                                <th class="min-w-125px sorting">Joined Date</th>
                                <th class="min-w-100px sorting_disabled">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_user_header">
                <h2 class="">Add User</h2>

                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body px-5 my-7">
                <form id="modal_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                    {{csrf_field()}}
                    <span id="form_output"></span>

                    <div
                        class="d-flex flex-column scroll-y px-5 px-lg-10"
                        id="kt_modal_add_user_scroll"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="true"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_user_header"
                        data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                        data-kt-scroll-offset="300px"
                        style="max-height: 14px;"
                    >
                    
                        <div class="row mb-2">
                            <div class="col-sm-6 col-12">
                                <label class="required fs-6 mb-1">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" />
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label class="required fs-6 mb-1">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" />
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-6 col-12">
                                <label class="required fs-6 mb-1">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" />
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <label class="required fs-6 mb-1">Role</label>
                                <input type="email" name="email" id="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" />
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-sm-6 col-12">
                                <label class="required fs-6 mb-1">Password</label>

                                <input type="text" name="password" id="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Passowrd" />

                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>

                            <div class="col-sm-6 col-12">
                                <label class="required fs-6 mb-1">Confirm Password</label>

                                <input type="text" name="confirm-password" id="confirm-password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Confirm Password" />

                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-10">
                        <input type="hidden" name="user_id" id="user_id" value="" />
                        <input type="hidden" name="button_action" id="button_action" value="insert" />
                        <button type="reset" class="btn btn-light me-3" modal-close="close">
                            Discard
                        </button>

                        <button type="submit" class="btn btn-primary" name="submit" id="action-btn">
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
        $("#users_table").DataTable({
            searching: true,
            search: {
                caseInsensitive: true
            },
            processing: true,
            paging: true,
            pageLength: 10,

            ajax: {
                url: "{{ route('users.getall') }}",
            },
            columns: [
                {
                    data: null,
                    render: function(data, type, full, meta) {
                        // 'data' contains the user object, including profileImage and name
                        return `
                        <div class="w-10px pe-2 sorting_disabled">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                            </div>
                                        </div>
                        `;
                    }
                },
                {
                    data: null,
                    render: function(data, type, full, meta) {
                        // 'data' contains the user object, including profileImage and name
                        return `
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="#">
                                        <div class="symbol-label">
                                            <img src="{{ asset('storage/assets/profile_images/') }}${data.profile_image}" alt="avatar" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 text-hover-primary mb-1">${data.name}</a>
                                    <span>${data.email}</span>
                                </div>
                            </div>
                        `;
                    }
                },
                { data: "employee_id" },
                { data: "rolename" },
                { data: "formatted_updated_at" },
                { data: "formatted_created_at" },
                { data: "action", orderable: true, searchable: true }
            ],
            columnDefs: [
                {
                    targets: [0], // Apply the text-center class only to the first column
                    className: "text-center",
                },
            ],
        });


    });

    $(document).on("click", "#add_data", function () {
        $("#modal_user").modal("show");
        $("#modal_user_form")[0].reset();
        $("#form_output").html("");
        $("#button_action").val("insert");
        $("#action").val("Add");
        $(".modal-title").text("Add a User");
    });

    $(document).ready(function () {
        let formValidator;
        function setupFormValidation(form) {
            formValidator = FormValidation.formValidation(form, {
                fields: {
                    firstname: {
                        validators: {
                            notEmpty: {
                                message: "User first name is required",
                            },
                        },
                    },
                    lastname: {
                        validators: {
                            notEmpty: {
                                message: "User last name is required",
                            },
                        },
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Valid email address is required",
                            },
                        },
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "Password is required",
                            },
                        },
                    },
                    confirm_password: {
                        validators: {
                            notEmpty: {
                                message: "Confirm Password is required",
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

        const form = document.getElementById("modal_user_form");
        setupFormValidation(form);
        $("#action").on("click", function (event) {
            event.preventDefault();
            formValidator.validate().then(function (status) {
                if (status === "Valid") {
                    const form_data = new FormData(form);
                    $.ajax({
                        url: "{{ route('users.store') }}",
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
                                        text: "User has been successfully created!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            $("#modal_user_form")[0].reset();
                                            $("#users_table").DataTable().ajax.reload();
                                            $("#modal_user").modal("hide");
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
            url: "{{ route('users.getdata') }}",
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
                $("#user_id").val(id);
                $("#modal_user").modal("show");
                $("#action").val("Save");
                $(".modal-title").text("Update User");
                $("#button_action").val("update");
            },
        });
    });

    $(document).on("click", ".delete", function () {
        var id = $(this).attr("id");
        Swal.fire({
            text: "Are you sure you want to delete this User?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel",
            buttonsStyling: false,
            customClass: {
                confirmButton: "btn btn-danger me-3",
                cancelButton: "btn btn-light",
            },
        }).then(function (result) {
            if (result.isConfirmed) {
                deleteUser(id);
            }
        });
    });

    function deleteUser(id) {
        $.ajax({
            url: "{{ route('users.delete') }}",
            method: "get",
            data: { id: id },
            beforeSend: function () {
                showDeleteIndicator();
            },
            success: function (data) {
                hideDeleteIndicator();
                Swal.fire({
                    text: "User has been deleted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#users_table").DataTable().ajax.reload();
            },
            error: function () {
                hideDeleteIndicator();
                Swal.fire({
                    text: "An error occurred while deleting the User.",
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
        $("#Users_select_all").on("change", function () {
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
                    $("#modal_user").modal("hide");
                }
            });
        });
    });
</script>
