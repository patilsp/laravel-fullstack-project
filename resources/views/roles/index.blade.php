@extends('layouts.master')


@section('style')
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
<link href="assets/css/main.css" rel="stylesheet" type="text/css" />
<script src="assets/js/custom.js"></script>
@endsection

@section('content')
<div id="kt_app_content_container" class="app-container container-xxl mt-4">

<div class="row g-4 mb-4">
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-2">
          <h6 class="fw-normal">Total 4 users</h6>
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

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h4 class="mb-1">Administrator</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>Edit Role</small></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-2">
          <h6 class="fw-normal">Total 7 users</h6>
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

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h4 class="mb-1">Manager</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>Edit Role</small></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-2">
          <h6 class="fw-normal">Total 5 users</h6>
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

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h4 class="mb-1">Users</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>Edit Role</small></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-2">
          <h6 class="fw-normal">Total 3 users</h6>
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

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h4 class="mb-1">Support</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>Edit Role</small></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between mb-2">
          <h6 class="fw-normal">Total 2 users</h6>
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

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end">
          <div class="role-heading">
            <h4 class="mb-1">Restricted User</h4>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal" class="role-edit-modal"><small>Edit Role</small></a>
          </div>
          <a href="javascript:void(0);" class="text-muted"><i class="bx bx-copy"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card h-100">
      <div class="row h-100">
        <div class="col-sm-5">
          <div class="d-flex align-items-end h-100 justify-content-center mt-0 pt-0 pb-5">
            <img src="assets/media/illustrations/user-role.png" class="img-fluid w-80px" alt="Image" >
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
          <a class="btn btn-primary mb-3 text-nowrap add-new-role" tooltip="Add New Role" id="add_data">
                <i class="bi bi-plus-lg me-2"></i>  Add New Role
                </a>
                <p class="mb-0">Add role, if it does not exist</p>
             
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
  
    <div class="card card-flush mb-6 mb-xl-9">
      <div class="card-header pt-5">
          <div class="card-title">
              <h2 class="d-flex align-items-center">Roles<span class="text-gray-600 fs-6 ms-1"></span></h2>
          </div>

          <div class="card-toolbar">
              <div class="d-flex align-items-center position-relative me-4">
                  <i class="bi bi-search fs-1 position-absolute ms-6"></i> <input type="text"  class="form-control form-control-solid w-250px ps-15" placeholder="Search Roles" />
              </div>
              <div class="user_role w-px-200 pb-3 pb-sm-0 me-2">
              <select id="UserRole" class="form-select text-capitalize">
                  <option value=""> Select Role </option>
                  @foreach($roles as $role)
                  <option value="{{ $role->id }}" class="text-capitalize">{{ $role->name }}</option>
                  @endforeach
              </select>
          </div>


          </div>
      </div>


        <div class="card-body pt-0">
            <div class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 no-footer" id="roles_table">
                        <thead>
                            <tr class="text-start text-muted fs-semibold fs-6 text-uppercase gs-0">
                                
                                <th class="min-w-50px sorting">ID</th>
                                <th class="min-w-150px sorting">Role Name</th>
                                <th class="min-w-150px sorting">DESCRIPTION</th>
                                <th class="min-w-125px sorting">Created Date</th>
                                <th class="text-end min-w-100px sorting_disabled"> Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600"></tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_role" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Add a Role</h3>

                <div class="btn btn-icon btn-sm btn-active-icon-danger" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>

            <div class="modal-body scroll-y mx-lg-5 my-7">
                <form id="modal_role_form" class="form" novalidate>
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div
                        class="d-flex flex-column scroll-y me-n7 pe-7"
                        id="kt_modal_add_role_scroll"
                        data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_role_header"
                        data-kt-scroll-wrappers="#kt_modal_add_role_scroll"
                        data-kt-scroll-offset="300px"
                    >
                        <div class="fv-row mb-10">
                            <label class="fs-5  form-label mb-2">
                                <span class="required">Role name</span>
                            </label>

                            <input class="form-control form-control-solid" placeholder="Enter a role name" name="name" id="name"/>
                        </div>

                        <div class="fv-row">
                            <label class="fs-5  form-label mb-2">Role Permissions</label>

                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <tbody class="text-gray-600 fw-semibold">
                                        <tr>
                                            <td class="text-gray-800">
                                                Administrator Access

                                                <span class="ms-2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Allows a full access to the system">
                                                    <i class="bi bi-info-square fs-7"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                                </span>
                                            </td>
                                            <td>
                                                <label class="form-check form-check-custom form-check-solid me-9">
                                                    <input class="form-check-input" type="checkbox" value="" id="roles_select_all" />
                                                    <span class="form-check-label" for="roles_select_all">
                                                        Select all
                                                    </span>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Admin Management</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="user_management_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="user_management_create" />
                                                        <span class="form-check-label">Create</span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        

                                        <tr>
                                            <td class="text-gray-800">Reports</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="reporting_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="reporting_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="reporting_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-gray-800">Payroll</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="payroll_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="payroll_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="payroll_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                       

                                        <tr>
                                            <td class="text-gray-800">API Controls</td>

                                            <td>
                                                <div class="d-flex">
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="api_controls_read" />
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value="" name="api_controls_write" />
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>

                                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="" name="api_controls_create" />
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-15">
                        <input type="hidden" name="role_id" id="role_id" value="" />
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

@endsection

  <script>
      var hostUrl = "assets/";
  </script>

  <script src="assets/plugins/global/plugins.bundle.js"></script>
  <script src="assets/js/scripts.bundle.js"></script>
  <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
  


  <script type="text/javascript">
  $(document).ready(function () {
        $("#roles_table").DataTable({
            processing: true,
            searching: true,
            paging: true,
            pageLength: 10,

            ajax: {
                url: "{{ route('roles.getall') }}",
            },
            columns: [{ data: "id" }, { data: "name" }, { data: "description" }, { data: "formatted_created_at" }, { data: "action", orderable: true, searchable: true }],
            columnDefs: [
                {
                    targets: "_all",
                    className: "text-center",
                },
            ],
        });
    });

$(document).on("click", "#add_data", function () {
    $("#modal_role").modal("show");
    $("#form_output").html("");
    $("#button_action").val("insert");
    $("#action").val("Add");
    $(".modal-title").text("Add a Role");
});


$(document).ready(function () {
    let formValidator;
    function setupFormValidation(form) {
        formValidator = FormValidation.formValidation(form, {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: "Role name is required",
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

    const form = document.getElementById("modal_role_form");
    setupFormValidation(form);
    $("#action").on("click", function (event) {
        event.preventDefault();
        formValidator.validate().then(function (status) {
            if (status === "Valid") {
                const form_data = new FormData(form);
                $.ajax({
                    url: "{{ route('roles.store') }}", 
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
                                    text: "Role has been successfully created!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                }).then(function (result) {
                                    if (result.isConfirmed) {
                                        $("#modal_role_form")[0].reset();
                                        $("#roles_table").DataTable().ajax.reload();
                                        $("#modal_role").modal("hide");
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
                        confirmButton: "btn btn-primary"
                    }
                });
            }
        });
    });
});

$(document).on("click", ".edit", function () {
    var id = $(this).attr("id");

    $("#form_output").html("");
    $.ajax({
        url: "{{ route('roles.getdata') }}",
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
            $("#role_id").val(id);
            $('#name').val(data.name);
            $("#modal_role").modal("show");
            $("#action").val("Save");
            $(".modal-title").text("Update Role");
            $("#button_action").val("update");
        },
    });
});


$(document).on("click", ".delete", function () {
    var id = $(this).attr("id");
    Swal.fire({
        text: "Are you sure you want to delete this role?",
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
            deleteRole(id);
        }
    });
});

function deleteRole(id) {
    $.ajax({
        url: "{{ route('roles.delete') }}",
        method: "get",
        data: { id: id },
        beforeSend: function () {
            showDeleteIndicator();
        },
        success: function (data) {
            hideDeleteIndicator();
            Swal.fire({
                text: "Role has been deleted successfully!",
                icon: "success",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-danger",
                },
            });
            $("#roles_table").DataTable().ajax.reload();
        },
        error: function () {
            hideDeleteIndicator();
            Swal.fire({
                text: "An error occurred while deleting the role.",
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
    $('#roles_select_all').on('change', function () {
        const isChecked = $(this).prop('checked');
        $('[type="checkbox"]').prop('checked', isChecked);
    });
});


$(document).ready(function () {
    const closeButton = $('[modal-close="close"]');
    closeButton.on('click', function (e) {
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
                cancelButton: "btn btn-active-light"
            }
        }).then(function (result) {
            if (result.value) {
                // Hide modal
                $('#modal_role').modal('hide');
            }
        });
    });
});


</script>
