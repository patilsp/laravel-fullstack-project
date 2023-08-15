@extends('layouts.master')


@section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-5">
        <div class="form d-flex flex-column flex-lg-row" >
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>User Profile</h2>
                        </div>
                    </div>

                    <div class="card-body text-center pt-0">
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px" style="background-image: url(assets/media/avatars/1.png);"></div>

                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="bi bi-pencil fs-7"></i>

                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>

                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>

                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                <i class="ki-outline ki-cross fs-2"></i>
                            </span>
                        </div>

                        <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                    </div>
                </div>

                <!-- <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Status</h2>
                        </div>

                        <div class="card-toolbar">
                            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                            <option></option>
                            <option value="published" selected>Published</option>
                            <option value="draft">Draft</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>

                        <div class="text-muted fs-7">Set the product status.</div>

                        <div class="d-none mt-10">
                            <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
                            <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
                        </div>
                    </div>
                </div> -->

            </div>

            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#user_info">User Info</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#user_setting">User Setting</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#user_reviews">Reviews</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="user_info" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                <div class="card-header cursor-pointer">
                                    <div class="card-title m-0">
                                        <h3 class="m-0">Profile Details</h3>
                                    </div>

                                    <a href="#" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
                                </div>

                                <div class="card-body p-9">
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>

                                        <div class="col-lg-8">
                                            <span class="fs-6 text-gray-800">{{ Auth::user()->firstname }}  {{ Auth::user()->lastname }}</span>
                                        </div>
                                    </div>


                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">
                                            Contact Phone

                                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1"> <i class="bi bi-phone fs-7"></i> </span>
                                        </label>

                                        <div class="col-lg-8 d-flex align-items-center">
                                            <span class="fs-6 text-gray-800 me-2">044 3276 454 935</span>
                                            <span class="badge badge-success">Verified</span>
                                        </div>
                                    </div>

                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Company Site</label>

                                        <div class="col-lg-8">
                                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">keenthemes.com</a>
                                        </div>
                                    </div>

                                 
                                    <div class="row mb-7">
                                        <label class="col-lg-4 fw-semibold text-muted">Communication</label>

                                        <div class="col-lg-8">
                                            <span class="fs-6 text-gray-800">Email, Phone</span>
                                        </div>
                                    </div>

                                    <div class="row mb-10">
                                        <label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>

                                        <div class="col-lg-8">
                                            <span class="fw-semibold fs-6 text-gray-800">Yes</span>
                                        </div>
                                    </div>

                                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                        <i class="bi bi-information fs-2tx text-warning me-4"></i>

                                        <div class="d-flex flex-stack flex-grow-1">
                                            <div class="fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                                                <div class="fs-6 text-gray-700">Your payment was declined. To start using tools, please <a class="fw-bold" href="#">Add Payment Method</a>.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="user_setting" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                         <div class="card mb-5 mb-xl-10">
                            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                <div class="card-title m-0">
                                    <h3 class="fw-bold m-0">Profile Details</h3>
                                </div>
                            </div>

                            <div id="kt_account_settings_profile_details" class="collapse show">
                                <form id="user_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                    {{csrf_field()}}
                                    <span id="form_output"></span>
                                    <div class="card-body border-top p-9">

                                  
                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>

                                            <div class="col-lg-8">
                                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/metronic8/demo50/assets/media/svg/avatars/blank.svg');">
                                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/1.jpg);"></div>

                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change"
                                                        data-bs-toggle="tooltip"
                                                        aria-label="Change avatar"
                                                        data-bs-original-title="Change avatar"
                                                        data-kt-initialized="1"
                                                    >
                                                        <i class="bi bi-pencil fs-7"></i>
                                                        <input type="file" name="user_avatar" id="user_avatar" accept=".png, .jpg, .jpeg" />
                                                    </label>

                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="cancel"
                                                        data-bs-toggle="tooltip"
                                                        aria-label="Cancel avatar"
                                                        data-bs-original-title="Cancel avatar"
                                                        data-kt-initialized="1"
                                                    >
                                                        <i class="bi bi-x-lg fs-2"></i>
                                                    </span>

                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="remove"
                                                        data-bs-toggle="tooltip"
                                                        aria-label="Remove avatar"
                                                        data-bs-original-title="Remove avatar"
                                                        data-kt-initialized="1"
                                                    >
                                                        <i class="ki-outline ki-cross fs-2"></i>
                                                    </span>
                                                </div>

                                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            </div>
                                        </div>

                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>

                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                        <input type="text" name="firstname" id="firstname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
                                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                    </div>

                                                    <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                        <input type="text" name="lastname" id="lastname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
                                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Role</label>

                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <input type="text" name="role_id" class="form-control form-control-lg form-control-solid" placeholder="Role name" value="1" />
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                                <span class="required">Contact Phone</span>

                                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active">
                                                    <i class="bi bi-phone text-gray-500 fs-6"></i>
                                                </span>
                                            </label>

                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="9876543210" />
                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="row mb-6">
                                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Notification</label>

                                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                <div class="d-flex align-items-center mt-3">
                                                    <label class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                                        <input class="form-check-input" name="notification[]" type="checkbox" value="1" />
                                                        <span class="fw-semibold ps-2 fs-6">
                                                            Email
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-custom form-check-inline form-check-solid">
                                                        <input class="form-check-input" name="notification[]" type="checkbox" value="2" />
                                                        <span class="fw-semibold ps-2 fs-6">
                                                            Phone
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <input type="hidden" name="user_profile_id" id="user_profile_id" value="{{ Auth::user()->id }}" />
                                        <input type="hidden" name="button_action" id="button_action" value="update" />
                                        <button type="reset" class="btn btn-light me-3" modal-close="close">
                                            Discard
                                        </button>

                                        <button type="submit" class="btn btn-primary" name="submit" id="action">
                                            <span class="indicator-label">
                                                Save Changes
                                            </span>
                                            <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                          
                        </div>
                    </div>

                    <div class="tab-pane fade" id="user_reviews" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            
                        </div>
                    </div>
                </div>

                <!-- <div class="d-flex justify-content-end">
                    <a href="/metronic8/demo50/../demo50/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                        Cancel
                    </a>

                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        <span class="indicator-label">
                            Save Changes
                        </span>
                        <span class="indicator-progress"> Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span> </span>
                    </button>
                </div> -->
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

    // $(document).on("click", "#add_data", function () {
        
    //     $("#user_profile_details_form")[0].reset();
    //     $("#form_output").html("");
    //     $("#button_action").val("insert");
    //     $("#action").val("Add");
    //     $(".modal-title").text("Add a Customer");
    // });


    $(document).ready(function () {
        let formValidator;
        function setupFormValidation(form) {
            formValidator = FormValidation.formValidation(form, {
                fields: {
                        // name: {
                        //     validators: {
                        //         notEmpty: {
                        //             message: "Customer name is required",
                        //         },
                        //     },
                        // },
                   
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

        const form = document.getElementById("user_profile_details_form");
        setupFormValidation(form);
        $("#action").on("click", function (event) {
            event.preventDefault();
            formValidator.validate().then(function (status) {
                if (status === "Valid") {
                    const form_data = new FormData(form);

                    const profilePicInput = document.getElementById("user_avatar");
                    if (profilePicInput.files.length > 0) {
                        form_data.append("profile_pic", profilePicInput.files[0]);
                    }

                    
                    $.ajax({
                        url: "{{ route('userprofile.store') }}",
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
                                        text: "User has been successfully Updated!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            $("#user_profile_details_form")[0].reset();
                                            $("#customers_table").DataTable().ajax.reload();
                                            $("#modal_customer").modal("hide");
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
            url: "{{ route('customers.getdata') }}",
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
                $("#customer_id").val(id);
                $("#name").val(data.name);
                $("#customer_role").val(data.customer_role);
                $("#two_step_login").val(data.two_step_login);
                $("#modal_customer").modal("show");
                $("#action").val("Save");
                $(".modal-title").text("Update customer");
                $("#button_action").val("update");
            },
        });
    });

    $(document).on("click", ".delete", function () {
        var id = $(this).attr("id");
        Swal.fire({
            text: "Are you sure you want to delete this customer?",
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
                deletecustomer(id);
            }
        });
    });

    function deletecustomer(id) {
        $.ajax({
            url: "{{ route('customers.delete') }}",
            method: "get",
            data: { id: id },
            beforeSend: function () {
                showDeleteIndicator();
            },
            success: function (data) {
                hideDeleteIndicator();
                Swal.fire({
                    text: "customer has been deleted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    },
                });
                $("#customers_table").DataTable().ajax.reload();
            },
            error: function () {
                hideDeleteIndicator();
                Swal.fire({
                    text: "An error occurred while deleting the customer.",
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
        $("#customers_select_all").on("change", function () {
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
                    $("#modal_customer").modal("hide");
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